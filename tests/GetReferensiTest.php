<?php

namespace Kanekescom\Siasn\Api\Referensi\Tests;

use Kanekescom\Siasn\Api\Referensi\Facades\Referensi;

class GetReferensiTest extends TestCase
{
    /** @test */
    public function can_get_referensi_agama()
    {
        $this->assertTrue(Referensi::getAgama(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Agama(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_alasan_hukuman_disiplin()
    {
        $this->assertTrue(Referensi::getAlasanHukumanDisiplin(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\AlasanHukumanDisiplin(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_asn_jenis_jabatan()
    {
        $this->assertTrue(Referensi::getAsnJenisJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\AsnJenisJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_asn_jenjang_jabatan()
    {
        $this->assertTrue(Referensi::getAsnJenjangJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\AsnJenjangJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_eselon()
    {
        $this->assertTrue(Referensi::getEselon(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Eselon(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_golongan()
    {
        $this->assertTrue(Referensi::getGolongan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Golongan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_instansi()
    {
        $this->assertTrue(Referensi::getInstansi(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Instansi(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional()
    {
        $this->assertTrue(Referensi::getJabatanFungsional(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\JabatanFungsional(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional_umum()
    {
        $this->assertTrue(Referensi::getJabatanFungsionalUmum(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\JabatanFungsionalUmum(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_anak()
    {
        $this->assertTrue(Referensi::getJenisAnak(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\JenisAnak(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_diklat()
    {
        $this->assertTrue(Referensi::getJenisDiklat(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\JenisDiklat(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_hukuman()
    {
        $this->assertTrue(Referensi::getJenisHukuman(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\JenisHukuman(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_jabatan()
    {
        $this->assertTrue(Referensi::getJenisJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\JenisJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_kanreg()
    {
        $this->assertTrue(Referensi::getKanreg(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Kanreg(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_kedudukan_hukum()
    {
        $this->assertTrue(Referensi::getKedudukanHukum(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\KedudukanHukum(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_kel_jabatan()
    {
        $this->assertTrue(Referensi::getKelJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\KelJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_latihan_struktural()
    {
        $this->assertTrue(Referensi::getLatihanStruktural(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\LatihanStruktural(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_lokasi()
    {
        $this->assertTrue(Referensi::getLokasi(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Lokasi(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_pendidikan()
    {
        $this->assertTrue(Referensi::getPendidikan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\Pendidikan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_ref_dokumen()
    {
        $this->assertTrue(Referensi::getRefDokumen(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\RefDokumen(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_ref_jenjang_jf()
    {
        $this->assertTrue(Referensi::getRefJenjangJf(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\RefJenjangJf(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_satuan_kerja()
    {
        $this->assertTrue(Referensi::getSatuanKerja(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\SatuanKerja(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_tingkat_pendidikan()
    {
        $this->assertTrue(Referensi::getTingkatPendidikan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \kanekescom\siasn\api\referensi\models\TingkatPendidikan(['limit' => '10']))->all()));
    }
}
