<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class AsnJenjangJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the AsnJenjangJabatan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'asn_jenis_jabatan_id' => $item['asnJenisJabatanId'],
        ];
    }
}
