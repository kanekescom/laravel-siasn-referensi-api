<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class LokasiTransformer extends TransformerAbstract
{
    /**
     * Transform the Lokasi model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Lokasi  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'kanreg_id' => $item['kanregId'],
            'lokasi_id' => $item['lokasiId'],
            'nama' => $item['nama'],
            'cepat_kode' => $item['cepatKode'],
            'jenis' => $item['jenis'],
            'jenis_kabupaten' => $item['jenisKabupaten'],
            'removal_date' => $item['removalDate'],
            'removal_date__formatted' => strtotime($item['removalDate']) ? date('Y-m-d H:i:s', strtotime($item['removalDate'])) : null,
            'jenis_desa' => $item['jenisDesa'],
            'tanggal_jorge' => $item['tanggalJorge'],
            'tanggal_jorge__formatted' => strtotime($item['tanggalJorge']) ? date('Y-m-d H:i:s', strtotime($item['tanggalJorge'])) : null,
            'merger_cepat_kode' => $item['mgrCepatKode'],
            'ibu_kota' => $item['ibukota'],
        ];
    }
}
