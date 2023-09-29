<?php

namespace Kanekescom\Siasn\Api\Referensi\Tests\Unit;

use Kanekescom\Siasn\Api\Referensi\Facades\Referensi;
use Kanekescom\Siasn\Api\Referensi\Tests\TestCase;

class ReferensiTest extends TestCase
{
    public function test_get_agama()
    {
        $this->assertTrue(Referensi::getAgama(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Agama(['limit' => '10']))->all()));
    }

    public function test_get_alasan_hukuman_disiplin()
    {
        $this->assertTrue(Referensi::getAlasanHukumanDisiplin(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\AlasanHukumanDisiplin(['limit' => '10']))->all()));
    }

    public function test_get_asn_jenis_jabatan()
    {
        $this->assertTrue(Referensi::getAsnJenisJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\AsnJenisJabatan(['limit' => '10']))->all()));
    }

    public function test_get_asn_jenjang_jabatan()
    {
        $this->assertTrue(Referensi::getAsnJenjangJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\AsnJenjangJabatan(['limit' => '10']))->all()));
    }

    public function test_get_eselon()
    {
        $this->assertTrue(Referensi::getEselon(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Eselon(['limit' => '10']))->all()));
    }

    public function test_get_golongan()
    {
        $this->assertTrue(Referensi::getGolongan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Golongan(['limit' => '10']))->all()));
    }

    public function test_get_instansi()
    {
        $this->assertTrue(Referensi::getInstansi(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Instansi(['limit' => '10']))->all()));
    }

    public function test_get_jabatan_fungsional()
    {
        $this->assertTrue(Referensi::getJabatanFungsional(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\JabatanFungsional(['limit' => '10']))->all()));
    }

    public function test_get_jabatan_fungsional_umum()
    {
        $this->assertTrue(Referensi::getJabatanFungsionalUmum(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\JabatanFungsionalUmum(['limit' => '10']))->all()));
    }

    public function test_get_jenis_anak()
    {
        $this->assertTrue(Referensi::getJenisAnak(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\JenisAnak(['limit' => '10']))->all()));
    }

    public function test_get_jenis_diklat()
    {
        $this->assertTrue(Referensi::getJenisDiklat(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\JenisDiklat(['limit' => '10']))->all()));
    }

    public function test_get_jenis_hukuman()
    {
        $this->assertTrue(Referensi::getJenisHukuman(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\JenisHukuman(['limit' => '10']))->all()));
    }

    public function test_get_jenis_jabatan()
    {
        $this->assertTrue(Referensi::getJenisJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\JenisJabatan(['limit' => '10']))->all()));
    }

    public function test_get_kanreg()
    {
        $this->assertTrue(Referensi::getKanreg(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Kanreg(['limit' => '10']))->all()));
    }

    public function test_get_kedudukan_hukum()
    {
        $this->assertTrue(Referensi::getKedudukanHukum(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\KedudukanHukum(['limit' => '10']))->all()));
    }

    public function test_get_kel_jabatan()
    {
        $this->assertTrue(Referensi::getKelJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\KelJabatan(['limit' => '10']))->all()));
    }

    public function test_get_latihan_struktural()
    {
        $this->assertTrue(Referensi::getLatihanStruktural(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\LatihanStruktural(['limit' => '10']))->all()));
    }

    public function test_get_lokasi()
    {
        $this->assertTrue(Referensi::getLokasi(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Lokasi(['limit' => '10']))->all()));
    }

    public function test_get_pendidikan()
    {
        $this->assertTrue(Referensi::getPendidikan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Pendidikan(['limit' => '10']))->all()));
    }

    public function test_get_ref_dokumen()
    {
        $this->assertTrue(Referensi::getRefDokumen(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\RefDokumen(['limit' => '10']))->all()));
    }

    public function test_get_ref_jenjang_jf()
    {
        $this->assertTrue(Referensi::getRefJenjangJf(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\RefJenjangJf(['limit' => '10']))->all()));
    }

    public function test_get_satuan_kerja()
    {
        $this->assertTrue(Referensi::getSatuanKerja(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\SatuanKerja(['limit' => '10']))->all()));
    }

    public function test_get_tingkat_pendidikan()
    {
        $this->assertTrue(Referensi::getTingkatPendidikan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\TingkatPendidikan(['limit' => '10']))->all()));
    }
}
