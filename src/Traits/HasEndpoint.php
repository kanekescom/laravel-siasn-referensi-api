<?php

namespace Kanekescom\Siasn\Api\Referensi\Traits;

use Illuminate\Http\Client\Response;

trait HasEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getAgama($params = []): Response
    {
        return $this->get('/agama', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getAlasanHukumanDisiplin($params = []): Response
    {
        return $this->get('/alasan-hukuman-disiplin', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getAsnJenisJabatan($params = []): Response
    {
        return $this->get('/asn-jenis-jabatan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getAsnJenjangJabatan($params = []): Response
    {
        return $this->get('/asn-jenjang-jabatan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getEselon($params = []): Response
    {
        return $this->get('/eselon', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getGolongan($params = []): Response
    {
        return $this->get('/golongan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getInstansi($params = []): Response
    {
        return $this->get('/instansi', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJabatanFungsional($params = []): Response
    {
        return $this->get('/jabatan-fungsional', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJabatanFungsionalUmum($params = []): Response
    {
        return $this->get('/jabatan-fungsional-umum', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisAnak($params = []): Response
    {
        return $this->get('/jenis-anak', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisHukuman($params = []): Response
    {
        return $this->get('/jenis-hukuman', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisJabatan($params = []): Response
    {
        return $this->get('/jenis-jabatan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getKanreg($params = []): Response
    {
        return $this->get('/kanreg', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getKedudukanHukum($params = []): Response
    {
        return $this->get('/kedudukan-hukum', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getKelJabatan($params = []): Response
    {
        return $this->get('/kel-jabatan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getLatihanStruktural($params = []): Response
    {
        return $this->get('/latihan-struktural', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getLokasi($params = []): Response
    {
        return $this->get('/lokasi', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getPendidikan($params = []): Response
    {
        return $this->get('/pendidikan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getRefDokumen($params = []): Response
    {
        return $this->get('/ref-dokumen', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getRefJenjangJf($params = []): Response
    {
        return $this->get('/ref-jenjang-jf', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getSatuanKerja($params = []): Response
    {
        return $this->get('/satuan-kerja', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getTingkatPendidikan($params = []): Response
    {
        return $this->get('/tingkat-pendidikan', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisDiklat($params = []): Response
    {
        return $this->get('/jenis-diklat', $params);
    }
}
