<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPresensi extends Model
{
    public function cekPresensi()
    {
        return $this->db->table('tbl_presensi')
            ->where('id_presensi', session()->get('id_karyawan'))
            ->where('tgl_presensi', date('Y-m-d'))
            ->get()->getRowArray();
    }
}