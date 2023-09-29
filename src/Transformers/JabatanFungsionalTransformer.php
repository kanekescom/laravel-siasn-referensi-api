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
            'bup_usia' => $item['bupUsia'], // ? From int
            'tunjangan_jabatan' => $item['tunJabatan'], // ? From int
            'bobot' => $item['bobot'], // ? From int
            'kelompok_jabatan_id' => $item['kelJabatanId'],
            'cepat_kode' => $item['cepatKode'],
            'merger_cepat_kode' => $item['mgrCepatKode'],
            'jenis' => $item['jenis'],
            'cepat_kode_new' => $item['cepatKodeNew'],
            'status' => $item['status'],
            'jumlah_formasi' => $item['jmlFormasi'], // ? From int
            'nama_asli' => $item['namaAsli'],
            'jenjang' => $item['jenjang'],
            'jf_ex_medis' => $item['jfExmedis'], // ? From int
            'is_syarat_jabatan' => $item['isSyaratJabatan'], // ?
        ];
    }
}
