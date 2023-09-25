<?php

namespace Kanekescom\Siasn\Api\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
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
                            {--limit= : Limit Results}
                            {--offset= : Offset Results}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume referensi endpoints on SIASN REFERENSI API. Use --limit and --offset options for "memory" issues.';

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
        $start = now();
        $endpoints = collect($this->endpoints);
        $option = $this->option('endpoint');
        $endpoint = $endpoints->get($option);
        $params = [
            'limit' => $this->option('limit'),
            'offset' => $this->option('offset'),
        ];

        if (blank($endpoint)) {
            $option = $this->choice(
                'What do you want to call endpoint?',
                $endpoints->prepend('exit', 'exit')->keys()->toArray(),
                'exit',
            );

            if ($option == 'exit') {
                exit;
            }

            $endpoint = $endpoints->get($option);
        }

        $case = Str::studly($option);
        $method = 'get'.$case;
        $model = "\Kanekescom\Siasn\Api\Referensi\Models\\{$case}";

        if ($this->option('model')) {
            $data = (new $model($params))->all();
        } else {
            $data = Referensi::$method($params)->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");
    }
}
