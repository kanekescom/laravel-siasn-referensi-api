<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class KanregTransformer extends TransformerAbstract
{
    /**
     * Transform the Kanreg model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Kanreg  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'regional_kota' => $item['regKota'],
            'nama' => $item['nama'],
            'pengenal' => $item['pengenal'],
            'satuan_kerja_id' => $item['satuanKerjaId'],
            'tanggal_jorge' => strtotime($item['tanggalJorge']) ? date('Y-m-d H:i:s', strtotime($item['tanggalJorge'])) : null, // ? From d-m-Y H:i:s date format
        ];
    }
}
