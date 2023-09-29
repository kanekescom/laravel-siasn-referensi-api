<?php

namespace Kanekescom\Siasn\Api\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException;
use Kanekescom\Siasn\Api\Referensi\Facades\Referensi;

class GetReferensi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-referensi:get-referensi
                            {--endpoint= : Endpoint API}
                            {--limit= : Limit results}
                            {--offset= : Offset results}
                            {--from-model : Results from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume referensi endpoints on SIASN Referensi API. Use --limit and --offset options for memory issues.';

    /**
     * The console command choice map.
     *
     * @var string
     */
    protected $endpoints = [
        'agama' => '/agama',
        'alasan-hukuman-disiplin' => '/alasan-hukuman-disiplin',
        'asn-jenis-jabatan' => '/asn-jenis-jabatan',
        'asn-jenjang-jabatan' => '/asn-jenjang-jabatan',
        'eselon' => '/eselon',
        'golongan' => '/golongan',
        'instansi' => '/instansi',
        'jabatan-fungsional' => '/jabatan-fungsional',
        'jabatan-fungsional-umum' => '/jabatan-fungsional-umum',
        'jenis-anak' => '/jenis-anak',
        'jenis-diklat' => '/jenis-diklat',
        'jenis-hukuman' => '/jenis-hukuman',
        'jenis-jabatan' => '/jenis-jabatan',
        'kanreg' => '/kanreg',
        'kedudukan-hukum' => '/kedudukan-hukum',
        'kel-jabatan' => '/kel-jabatan',
        'latihan-struktural' => '/latihan-struktural',
        'lokasi' => '/lokasi',
        'pendidikan' => '/pendidikan',
        'ref-dokumen' => '/ref-dokumen',
        'ref-jenjang-jf' => '/ref-jenjang-jf',
        'satuan-kerja' => '/satuan-kerja',
        'tingkat-pendidikan' => '/tingkat-pendidikan',
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $endpointOptions = collect($this->endpoints);
        $endpoint = $this->option('endpoint');
        $params = [
            'limit' => $this->option('limit'),
            'offset' => $this->option('offset'),
        ];

        if (blank($endpoint)) {
            $endpoint = $this->choice(
                'What do you want to call endpoint?',
                collect(['exit' => 'exit'])->merge($endpointOptions)->keys()->toArray(),
                'exit',
            );
        }

        $start = now();

        if ($endpoint == 'exit') {
            return;
        }

        if (blank($endpointOptions->get($endpoint))) {
            throw new BadEndpointCallException("Endpoint {$endpoint} does not exist.");
        }

        $className = Str::studly($endpoint);
        $method = 'get'.$className;
        $model = "\Kanekescom\Siasn\Api\Referensi\Models\\{$className}";

        if ($this->option('from-model')) {
            $data = (new $model($params))->all();
        } else {
            $data = Referensi::$method($params)->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");
    }
}
