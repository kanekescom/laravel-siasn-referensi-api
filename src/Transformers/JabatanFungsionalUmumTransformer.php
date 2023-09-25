<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JabatanFungsionalUmumTransformer extends TransformerAbstract
{
    /**
     * Transform the JabatanFungsionalUmum model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'cepat_kode' => $item['cepatKode'],
            'wajib_ganti_tertentu' => $item['wajibGantiTertentu'],
            'jenis_jabatan_umum_id' => $item['jenisJabatanUmumId'],
            'merger_cepat_kode' => $item['mgrCepatKode'],
            'nama_asli' => $item['namaAsli'],
            'kode_menpan' => $item['kodeMenpan'],
            'instansi_id' => $item['instansiId'],
            'status' => $item['status'], // int
            'asal_peraturan_id' => $item['asalPeraturanId'], // int
            'jfu_urusan_pemerintahan' => $item['jfuUrusanPemerintahan'], // int
        ];
    }
}
