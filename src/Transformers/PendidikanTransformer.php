<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class PendidikanTransformer extends TransformerAbstract
{
    /**
     * Transform the Pendidikan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Pendidikan  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'tingkat_pendidikan_id' => $item['tingkat_pendidikan_id'],
            'nama' => $item['nama'],
            'cepat_kode' => $item['cepat_kode'],
            'merger_cepat_kode' => $item['merger_cepat_kode'],
            'nama_asli' => $item['nama_asli'],
            'status' => $item['status'], // ? From int
            'sub_rumpun_prog_id' => $item['subrumpun_prog_id'], // ? From int
            'cepat_kode_induk' => $item['cepat_kode_induk'],
            'sub_rumpun_prog_kode' => $item['subrumpun_prog_kode'],
        ];
    }
}
