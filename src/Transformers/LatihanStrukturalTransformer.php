<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class LatihanStrukturalTransformer extends TransformerAbstract
{
    /**
     * Transform the LatihanStruktural model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\LatihanStruktural  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'eselon_level' => $item['eselon_level'],
            'ncsis_time' => $item['ncsistime'],
            'ncsis_time__formatted' => strtotime($item['ncsistime']) ? date('Y-m-d H:i:s', strtotime($item['ncsistime'])) : null,
            'struktural_pns' => $item['struktural_pns'],
        ];
    }
}
