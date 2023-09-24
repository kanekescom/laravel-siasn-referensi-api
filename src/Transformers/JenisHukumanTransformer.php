<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JenisHukumanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisHukuman model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisHukuman  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'jenis_tingkat_hukuman_id' => $item['jenisTingkatHukumanId'],
        ];
    }
}
