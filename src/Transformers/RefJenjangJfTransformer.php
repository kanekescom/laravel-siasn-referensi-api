<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class RefJenjangJfTransformer extends TransformerAbstract
{
    /**
     * Transform the RefJenjangJf model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\RefJenjangJf  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'deskripsi' => $item['deskripsi'],
            'peraturan' => $item['peraturan'],
        ];
    }
}
