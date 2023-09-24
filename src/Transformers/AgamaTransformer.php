<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class AgamaTransformer extends TransformerAbstract
{
    /**
     * Transform the Agama model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Agama  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
        ];
    }
}
