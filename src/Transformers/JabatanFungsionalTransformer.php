<?php

namespace Kanekescom\Siasn\Api\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JabatanFungsionalTransformer extends TransformerAbstract
{
    /**
     * Transform the JabatanFungsional model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JabatanFungsional  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'min_golongan_id' => $item['miGolId'],
            'max_golongan_id' => $item['maxGolId'],
            'nama' => $item['nama'],
            'bup_usia' => $item['bupUsia'], // int
            'tunjangan_jabatan' => $item['tunJabatan'], // int
            'bobot' => $item['bobot'], // int
            'kelompok_jabatan_id' => $item['kelJabatanId'],
            'cepat_kode' => $item['cepatKode'],
            'merger_cepat_kode' => $item['mgrCepatKode'],
            'jenis' => $item['jenis'],
            'cepat_kode_new' => $item['cepatKodeNew'],
            'status' => $item['status'],
            'jumlah_formasi' => $item['jmlFormasi'], // int
            'nama_asli' => $item['namaAsli'],
            'jenjang' => $item['jenjang'],
            'jf_ex_medis' => $item['jfExmedis'], // int
            'is_syarat_jabatan' => $item['isSyaratJabatan'], // bool
        ];
    }
}
