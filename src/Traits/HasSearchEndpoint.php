<?php

namespace Kanekescom\Siasn\Api\Referensi\Traits;

use Illuminate\Http\Client\Response;

trait HasSearchEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getAgamaSearch($params = []): Response
    {
        return $this->get('/agama/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getAlasanHukumanDisiplinSearch($params = []): Response
    {
        return $this->get('/alasan-hukuman-disiplin/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getAsnJenisJabatanSearch($params = []): Response
    {
        return $this->get('/asn-jenis-jabatan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getAsnJenjangJabatanSearch($params = []): Response
    {
        return $this->get('/asn-jenjang-jabatan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getEselonSearch($params = []): Response
    {
        return $this->get('/eselon/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getGolonganSearch($params = []): Response
    {
        return $this->get('/golongan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getInstansiSearch($params = []): Response
    {
        return $this->get('/instansi/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJabatanFungsionalSearch($params = []): Response
    {
        return $this->get('/jabatan-fungsional/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJabatanFungsionalUmumSearch($params = []): Response
    {
        return $this->get('/jabatan-fungsional-umum/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisAnakSearch($params = []): Response
    {
        return $this->get('/jenis-anak/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisHukumanSearch($params = []): Response
    {
        return $this->get('/jenis-hukuman/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisJabatanSearch($params = []): Response
    {
        return $this->get('/jenis-jabatan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getKanregSearch($params = []): Response
    {
        return $this->get('/kanreg/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getKedudukanHukumSearch($params = []): Response
    {
        return $this->get('/kedudukan-hukum/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getKelJabatanSearch($params = []): Response
    {
        return $this->get('/kel-jabatan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getLatihanStrukturalSearch($params = []): Response
    {
        return $this->get('/latihan-struktural/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getLokasiSearch($params = []): Response
    {
        return $this->get('/lokasi/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getPendidikanSearch($params = []): Response
    {
        return $this->get('/pendidikan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getRefDokumenSearch($params = []): Response
    {
        return $this->get('/ref-dokumen/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getRefJenjangJfSearch($params = []): Response
    {
        return $this->get('/ref-jenjang-jf/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getSatuanKerjaSearch($params = []): Response
    {
        return $this->get('/satuan-kerja/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getTingkatPendidikanSearch($params = []): Response
    {
        return $this->get('/tingkat-pendidikan/search', $params);
    }

    /**
     * Issue a GET request.
     */
    public function getJenisDiklatSearch($params = []): Response
    {
        return $this->get('/jenis-diklat/search', $params);
    }
}
