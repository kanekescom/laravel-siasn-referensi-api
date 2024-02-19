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

    public function getAgama(array $query = []): Response
    {
        return $this->get('/agama/search', $query);
    }

    public function getAlasanHukumanDisiplin(array $query = []): Response
    {
        return $this->get('/alasan-hukuman-disiplin/search', $query);
    }

    public function getAsnJenisJabatan(array $query = []): Response
    {
        return $this->get('/asn-jenis-jabatan/search', $query);
    }

    public function getAsnJenjangJabatan(array $query = []): Response
    {
        return $this->get('/asn-jenjang-jabatan/search', $query);
    }

    public function getEselon(array $query = []): Response
    {
        return $this->get('/eselon/search', $query);
    }

    public function getGolongan(array $query = []): Response
    {
        return $this->get('/golongan/search', $query);
    }

    public function getInstansi(array $query = []): Response
    {
        return $this->get('/instansi/search', $query);
    }

    public function getJabatanFungsional(array $query = []): Response
    {
        return $this->get('/jabatan-fungsional/search', $query);
    }

    public function getJabatanFungsionalUmum(array $query = []): Response
    {
        return $this->get('/jabatan-fungsional-umum/search', $query);
    }

    public function getJenisAnak(array $query = []): Response
    {
        return $this->get('/jenis-anak/search', $query);
    }

    public function getJenisHukuman(array $query = []): Response
    {
        return $this->get('/jenis-hukuman/search', $query);
    }

    public function getJenisJabatan(array $query = []): Response
    {
        return $this->get('/jenis-jabatan/search', $query);
    }

    public function getKanreg(array $query = []): Response
    {
        return $this->get('/kanreg/search', $query);
    }

    public function getKedudukanHukum(array $query = []): Response
    {
        return $this->get('/kedudukan-hukum/search', $query);
    }

    public function getKelJabatan(array $query = []): Response
    {
        return $this->get('/kel-jabatan/search', $query);
    }

    public function getLatihanStruktural(array $query = []): Response
    {
        return $this->get('/latihan-struktural/search', $query);
    }

    public function getLokasi(array $query = []): Response
    {
        return $this->get('/lokasi/search', $query);
    }

    public function getPendidikan(array $query = []): Response
    {
        return $this->get('/pendidikan/search', $query);
    }

    public function getRefDokumen(array $query = []): Response
    {
        return $this->get('/ref-dokumen/search', $query);
    }

    public function getRefJenjangJf(array $query = []): Response
    {
        return $this->get('/ref-jenjang-jf/search', $query);
    }

    public function getSatuanKerja(array $query = []): Response
    {
        return $this->get('/satuan-kerja/search', $query);
    }

    public function getTingkatPendidikan(array $query = []): Response
    {
        return $this->get('/tingkat-pendidikan/search', $query);
    }

    public function getJenisDiklat(array $query = []): Response
    {
        return $this->get('/jenis-diklat/search', $query);
    }
}
