<?php

namespace Kanekescom\Siasn\Api\Referensi;

use Illuminate\Http\Client\Response;
use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Facades\Siasn;

class Referensi extends ClassExtender
{
    public function __construct()
    {
        $this->class = Siasn::baseUrl(config('siasn-referensi-api.base_url'));
    }

    public function getAgama($query = []): Response
    {
        return $this->get('/agama/search', $query);
    }

    public function getAlasanHukumanDisiplin($query = []): Response
    {
        return $this->get('/alasan-hukuman-disiplin/search', $query);
    }

    public function getAsnJenisJabatan($query = []): Response
    {
        return $this->get('/asn-jenis-jabatan/search', $query);
    }

    public function getAsnJenjangJabatan($query = []): Response
    {
        return $this->get('/asn-jenjang-jabatan/search', $query);
    }

    public function getEselon($query = []): Response
    {
        return $this->get('/eselon/search', $query);
    }

    public function getGolongan($query = []): Response
    {
        return $this->get('/golongan/search', $query);
    }

    public function getInstansi($query = []): Response
    {
        return $this->get('/instansi/search', $query);
    }

    public function getJabatanFungsional($query = []): Response
    {
        return $this->get('/jabatan-fungsional/search', $query);
    }

    public function getJabatanFungsionalUmum($query = []): Response
    {
        return $this->get('/jabatan-fungsional-umum/search', $query);
    }

    public function getJenisAnak($query = []): Response
    {
        return $this->get('/jenis-anak/search', $query);
    }

    public function getJenisDiklat($query = []): Response
    {
        return $this->get('/jenis-diklat/search', $query);
    }

    public function getJenisHukuman($query = []): Response
    {
        return $this->get('/jenis-hukuman/search', $query);
    }

    public function getJenisJabatan($query = []): Response
    {
        return $this->get('/jenis-jabatan/search', $query);
    }

    public function getKanreg($query = []): Response
    {
        return $this->get('/kanreg/search', $query);
    }

    public function getKedudukanHukum($query = []): Response
    {
        return $this->get('/kedudukan-hukum/search', $query);
    }

    public function getKelJabatan($query = []): Response
    {
        return $this->get('/kel-jabatan/search', $query);
    }

    public function getLatihanStruktural($query = []): Response
    {
        return $this->get('/latihan-struktural/search', $query);
    }

    public function getLokasi($query = []): Response
    {
        return $this->get('/lokasi/search', $query);
    }

    public function getPendidikan($query = []): Response
    {
        return $this->get('/pendidikan/search', $query);
    }

    public function getRefDokumen($query = []): Response
    {
        return $this->get('/ref-dokumen/search', $query);
    }

    public function getRefJenjangJf($query = []): Response
    {
        return $this->get('/ref-jenjang-jf/search', $query);
    }

    public function getSatuanKerja($query = []): Response
    {
        return $this->get('/satuan-kerja/search', $query);
    }

    public function getTingkatPendidikan($query = []): Response
    {
        return $this->get('/tingkat-pendidikan/search', $query);
    }
}
