<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class KedudukanHukumTransformer extends TransformerAbstract
{
    /**
     * Transform the KedudukanHukum model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\KedudukanHukum  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'aturan' => $item['aturan'],
            'kode' => $item['kode'],
        ];
    }
}
