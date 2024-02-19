<?php

namespace Kanekescom\Siasn\Api\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException;
use Kanekescom\Siasn\Api\Referensi\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Referensi\Facades\Referensi;

class GetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-referensi:get
                        {endpoint? : Endpoint API}
                        {--limit= : Limit results}
                        {--offset= : Offset results}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to SIASN Referensi API endpoint. Use --limit and --offset options for memory issues.';

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
        'jenis-diklat' => '/jenis-diklat',
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $endpointOptions = collect($this->endpoints);
        $endpoint = $this->argument('endpoint');

        if (blank($endpoint)) {
            $endpoint = $this->choice(
                'What do you want to call endpoint?',
                collect(['exit' => 'exit'])->merge($endpointOptions)->keys()->toArray(),
                'exit',
            );
        }

        if ($endpoint == 'exit') {
            return self::SUCCESS;
        }

        if (blank($endpointOptions->get($endpoint))) {
            throw new BadEndpointCallException("Endpoint {$endpoint} does not exist.");
        }

        $input = json_decode($this->ask('Write json for filter! (Optional)'), true);

        if ($input == null) {
            $input = [];
        }

        if (! is_array($input)) {
            throw new InvalidJsonException;
        }

        $start = now();
        $query = array_merge($input, [
            'limit' => $this->option('limit'),
            'offset' => $this->option('offset'),
        ]);
        $method = 'get'.Str::studly($endpoint);

        $this->info(json_encode(
            Referensi::$method($query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
