<?php

namespace Kanekescom\Siasn\Api\Referensi;

use Illuminate\Http\Client\Response;
use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Facades\Siasn;

class Referensi extends ClassExtender
{
    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->class = Siasn::baseUrl(config('siasn-referensi-api.base_url'));
    }

    /**
     * Issue a GET request.
     */
    public function getAgama($query = []): Response
    {
        return $this->get('/agama/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getAlasanHukumanDisiplin($query = []): Response
    {
        return $this->get('/alasan-hukuman-disiplin/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getAsnJenisJabatan($query = []): Response
    {
        return $this->get('/asn-jenis-jabatan/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getAsnJenjangJabatan($query = []): Response
    {
        return $this->get('/asn-jenjang-jabatan/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getEselon($query = []): Response
    {
        return $this->get('/eselon/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getGolongan($query = []): Response
    {
        return $this->get('/golongan/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getInstansi($query = []): Response
    {
        return $this->get('/instansi/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getJabatanFungsional($query = []): Response
    {
        return $this->get('/jabatan-fungsional/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getJabatanFungsionalUmum($query = []): Response
    {
        return $this->get('/jabatan-fungsional-umum/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisAnak($query = []): Response
    {
        return $this->get('/jenis-anak/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisDiklat($query = []): Response
    {
        return $this->get('/jenis-diklat/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisHukuman($query = []): Response
    {
        return $this->get('/jenis-hukuman/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisJabatan($query = []): Response
    {
        return $this->get('/jenis-jabatan/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getKanreg($query = []): Response
    {
        return $this->get('/kanreg/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getKedudukanHukum($query = []): Response
    {
        return $this->get('/kedudukan-hukum/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getKelJabatan($query = []): Response
    {
        return $this->get('/kel-jabatan/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getLatihanStruktural($query = []): Response
    {
        return $this->get('/latihan-struktural/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getLokasi($query = []): Response
    {
        return $this->get('/lokasi/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getPendidikan($query = []): Response
    {
        return $this->get('/pendidikan/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getRefDokumen($query = []): Response
    {
        return $this->get('/ref-dokumen/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getRefJenjangJf($query = []): Response
    {
        return $this->get('/ref-jenjang-jf/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getSatuanKerja($query = []): Response
    {
        return $this->get('/satuan-kerja/search', $query);
    }

    /**
     * Issue a GET request.
     */
    public function getTingkatPendidikan($query = []): Response
    {
        return $this->get('/tingkat-pendidikan/search', $query);
    }
}
