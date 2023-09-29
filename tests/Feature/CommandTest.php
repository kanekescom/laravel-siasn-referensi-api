<?php

namespace Kanekescom\Siasn\Api\Referensi\Tests\Feature;

use Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException;
use Kanekescom\Siasn\Api\Referensi\Tests\TestCase;

class CommandTest extends TestCase
{
    public function test_get_doesnt_exist_endpoint()
    {
        $this->expectException(BadEndpointCallException::class);

        $this->artisan('siasn-referensi:get-referensi --endpoint="doesnt-exist-endpoint" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="doesnt-exist-endpoint" --limit=10 --from-model')->assertSuccessful();
    }

    public function test_get_endpoint_question_choose_exit()
    {
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'exit')
            ->assertSuccessful();
    }

    public function test_get_agama()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="agama" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="agama" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'agama')
            ->assertSuccessful();
    }

    public function test_get_alasan_hukuman_disiplin()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="alasan-hukuman-disiplin" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="alasan-hukuman-disiplin" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'alasan-hukuman-disiplin')
            ->assertSuccessful();
    }

    public function test_get_asn_jenis_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenis-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenis-jabatan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'asn-jenis-jabatan')
            ->assertSuccessful();
    }

    public function test_get_asn_jenjang_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenjang-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenjang-jabatan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'asn-jenjang-jabatan')
            ->assertSuccessful();
    }

    public function test_get_eselon()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="eselon" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="eselon" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'eselon')
            ->assertSuccessful();
    }

    public function test_get_golongan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="golongan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="golongan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'golongan')
            ->assertSuccessful();
    }

    public function test_get_instansi()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="instansi" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="instansi" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'instansi')
            ->assertSuccessful();
    }

    public function test_get_jabatan_fungsional()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'jabatan-fungsional')
            ->assertSuccessful();
    }

    public function test_get_jabatan_fungsional_umum()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional-umum" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional-umum" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'jabatan-fungsional-umum')
            ->assertSuccessful();
    }

    public function test_get_jenis_anak()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-anak" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-anak" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'jenis-anak')
            ->assertSuccessful();
    }

    public function test_get_jenis_diklat()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-diklat" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-diklat" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'jenis-diklat')
            ->assertSuccessful();
    }

    public function test_get_jenis_hukuman()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-hukuman" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-hukuman" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'jenis-hukuman')
            ->assertSuccessful();
    }

    public function test_get_jenis_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-jabatan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'jenis-jabatan')
            ->assertSuccessful();
    }

    public function test_get_kanreg()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="kanreg" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="kanreg" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'kanreg')
            ->assertSuccessful();
    }

    public function test_get_kedudukan_hukum()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="kedudukan-hukum" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="kedudukan-hukum" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'kedudukan-hukum')
            ->assertSuccessful();
    }

    public function test_get_kel_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="kel-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="kel-jabatan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'kel-jabatan')
            ->assertSuccessful();
    }

    public function test_get_latihan_struktural()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="latihan-struktural" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="latihan-struktural" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'latihan-struktural')
            ->assertSuccessful();
    }

    public function test_get_lokasi()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="lokasi" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="lokasi" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'lokasi')
            ->assertSuccessful();
    }

    public function test_get_pendidikan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="pendidikan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="pendidikan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'pendidikan')
            ->assertSuccessful();
    }

    public function test_get_ref_dokumen()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-dokumen" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-dokumen" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'ref-dokumen')
            ->assertSuccessful();
    }

    public function test_get_ref_jenjang_jf()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-jenjang-jf" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-jenjang-jf" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'ref-jenjang-jf')
            ->assertSuccessful();
    }

    public function test_get_satuan_kerja()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="satuan-kerja" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="satuan-kerja" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'satuan-kerja')
            ->assertSuccessful();
    }

    public function test_get_tingkat_pendidikan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="tingkat-pendidikan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="tingkat-pendidikan" --limit=10 --from-model')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', 'tingkat-pendidikan')
            ->assertSuccessful();
    }
}
