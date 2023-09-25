<?php

namespace Kanekescom\Siasn\Api\Referensi\Tests;

class CommandTest extends TestCase
{
    /** @test */
    public function can_get_referensi_agama()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="agama" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="agama" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_alasan_hukuman_disiplin()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="alasan-hukuman-disiplin" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="alasan-hukuman-disiplin" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_asn_jenis_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenis-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenis-jabatan" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_asn_jenjang_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenjang-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="asn-jenjang-jabatan" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_eselon()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="eselon" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="eselon" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_golongan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="golongan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="golongan" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_instansi()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="instansi" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="instansi" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional_umum()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional-umum" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jabatan-fungsional-umum" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_anak()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-anak" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-anak" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_diklat()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-diklat" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-diklat" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_hukuman()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-hukuman" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-hukuman" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="jenis-jabatan" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_kanreg()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="kanreg" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="kanreg" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_kedudukan_hukum()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="kedudukan-hukum" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="kedudukan-hukum" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_kel_jabatan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="kel-jabatan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="kel-jabatan" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_latihan_struktural()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="latihan-struktural" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="latihan-struktural" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_lokasi()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="lokasi" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="lokasi" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_pendidikan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="pendidikan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="pendidikan" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_ref_dokumen()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-dokumen" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-dokumen" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_ref_jenjang_jf()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-jenjang-jf" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="ref-jenjang-jf" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_satuan_kerja()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="satuan-kerja" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="satuan-kerja" --limit=10 --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_tingkat_pendidikan()
    {
        $this->artisan('siasn-referensi:get-referensi --endpoint="tingkat-pendidikan" --limit=10')->assertSuccessful();
        $this->artisan('siasn-referensi:get-referensi --endpoint="tingkat-pendidikan" --limit=10 --model')->assertSuccessful();
    }
}
