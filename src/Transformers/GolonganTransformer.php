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
            'fungsi_kredit_utama' => (int) $item['fungKredututama'],
            'fungsi_kredit_tambahan' => (int) $item['fungKreditTambahan'],
            'fungsi_kredit_total' => (int) $item['fungKreditTotal'],
        ];
    }
}
