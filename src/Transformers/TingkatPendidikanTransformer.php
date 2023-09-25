<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class TingkatPendidikanTransformer extends TransformerAbstract
{
    /**
     * Transform the TingkatPendidikan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\TingkatPendidikan  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'golongan_id' => $item['golongan_id'],
            'nama' => $item['nama'],
            'golongan_awal_id' => $item['golongan_awal_id'],
            'id_lama' => $item['id_lama'],
            'group_tingkat_penddidikan_id' => $item['group_tk_pend_id'],
            'group_tingkat_penddidikan_nama' => $item['group_tk_pend_nm'],
        ];
    }
}
