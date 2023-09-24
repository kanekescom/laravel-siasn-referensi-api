<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class EselonTransformer extends TransformerAbstract
{
    /**
     * Transform the Eselon model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Eselon  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'golongan_terendah_id' => $item['terendah_id'],
            'golongan_tertinggi_id' => $item['TertinggiId'],
            'eselon_level_id' => $item['eselon_level_id'],
            'asn_jenjang_jabatan_id' => $item['asn_jenjang_jabatan_id'],
            'jabatan_asn' => $item['JabatanAsn'],
        ];
    }
}
