<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class GolonganTransformer extends TransformerAbstract
{
    /**
     * Transform the Golongan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Golongan  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'nama_pangkat' => $item['namaPangkat'],
            'fungsi_kredit_utama' => $item['fungKredututama'], // ? From int
            'fungsi_kredit_tambahan' => $item['fungKreditTambahan'], // ? From int
            'fungsi_kredit_total' => $item['fungKreditTotal'], // ? From int
        ];
    }
}
