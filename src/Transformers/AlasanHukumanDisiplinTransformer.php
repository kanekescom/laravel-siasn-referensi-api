<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class AlasanHukumanDisiplinTransformer extends TransformerAbstract
{
    /**
     * Transform the AlasanHukumanDisiplin model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'keterangan' => $item['keterangan'],
        ];
    }
}
