<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JenisDiklatTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisDiklat model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisDiklat  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'jenis_diklat' => $item['jenis_diklat'],
        ];
    }
}
