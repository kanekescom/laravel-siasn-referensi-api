<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JenisAnakTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisAnak model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisAnak  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
        ];
    }
}
