<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJabatan;

class Jabatan extends BaseController
{
    public function __construct()
    {
        $this->ModelJabatan = new ModelJabatan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Jabatan',
            'menu' => 'jabatan',
            'page' => 'backend/v_jabatan',
            'jabatan' => $this->ModelJabatan->allData(),
        ];
        return view('v_template_back', $data);
    }
    public function insertData()
    {
    $data = [
        'nama_jabatan' => $this->request->getPost('nama_jabatan'),
    ];

    $this->ModelJabatan->insertData($data);
    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
    return redirect()->to('Jabatan');
    }
}