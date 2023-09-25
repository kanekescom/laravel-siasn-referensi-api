<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class InstansiTransformer extends TransformerAbstract
{
    /**
     * Transform the Instansi model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Instansi  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'lokasi_id' => $item['lokasiId'],
            'nama' => $item['nama'],
            'jenis' => $item['jenis'],
            'cepat_kode' => $item['cepatKode'],
            'proses_berkas_dipusat' => $item['prosesBerkasDipusat'],
            'merger_cepat_kode' => $item['mgrCepatKode'],
            'status' => $item['status'],
            'cepat_kode5' => $item['cepatKode5'],
            'cepat_kode5_lama' => $item['cepatKode5Lama'],
            'nama_baru' => $item['namaBaru'],
            'nama_jabatan' => $item['namaJabatan'],
            'jenis_instansi_id' => $item['jenisInstansiId'],
        ];
    }
}
