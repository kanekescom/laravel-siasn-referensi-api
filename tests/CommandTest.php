<?php

it('can not get doesnt exist endpoint', function () {
    $this->artisan('siasn-referensi:get doesnt-exist-endpoint --limit=10')->assertSuccessful();
})->throws(\Kanekescom\Siasn\Referensi\Api\Exceptions\BadEndpointCallException::class);

it('can not get doesnt exist endpoint and in the question, choose to exit', function () {
    $this->artisan('siasn-referensi:get --limit=10')
        ->expectsQuestion('What do you want to call endpoint?', 'exit')
        ->assertSuccessful();
});

$endpoints = collect([
    'agama',
    'alasan-hukuman-disiplin',
    'asn-jenis-jabatan',
    'asn-jenjang-jabatan',
    'eselon',
    'golongan',
    'instansi',
    'jabatan-fungsional',
    'jabatan-fungsional-umum',
    'jenis-anak',
    'jenis-hukuman',
    'jenis-jabatan',
    'kanreg',
    'kedudukan-hukum',
    'kel-jabatan',
    'latihan-struktural',
    'lokasi',
    'pendidikan',
    'ref-dokumen',
    'ref-jenjang-jf',
    'satuan-kerja',
    'tingkat-pendidikan',
    'jenis-diklat',
])->each(function ($endpoint) {
    $testName = \Illuminate\Support\Str::of($endpoint)->headline()->lower();

    it("can {$testName}", function () use ($endpoint) {
        $this->artisan("siasn-referensi:get {$endpoint} --limit=10")
            ->assertSuccessful();

        $this->artisan('siasn-referensi:get --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', (string) $endpoint)
            ->assertSuccessful();
    });

    it("can not {$testName} because invalid json", function () use ($endpoint) {
        $this->artisan("siasn-referensi:get {$endpoint} --limit=10")
            ->assertSuccessful();

        $this->artisan('siasn-referensi:get --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', (string) $endpoint)
            ->assertSuccessful();
    });
});
