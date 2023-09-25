<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JenisJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisJabatan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisJabatan  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
        ];
    }
}
