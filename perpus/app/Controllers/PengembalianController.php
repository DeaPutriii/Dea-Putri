<?php

namespace App\Controllers;

use App\Models\PengembalianModel;

class PengembalianController extends BaseController
{
    protected $pengembalianModel;

    public function __construct()
    {
        $this->pengembalianModel = new PengembalianModel();
    }

    // Menampilkan semua data pengembalian
    public function index()
    {
        $data['pengembalian'] = $this->pengembalianModel->findAll();
        return view('pengembalian/index', $data);
    }
 
    // Menampilkan form tambah data pengembalian
    public function create()
    {
        return view('pengembalian/create');
    }

    // Menyimpan data pengembalian baru
    public function store()
    {
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
        ];

        if ($this->pengembalianModel->insert($data)) {
            return redirect()->to('/pengembalian')->with('success', 'Data pengembalian berhasil ditambahkan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data pengembalian.');
        }
    }

    // Menampilkan form edit data pengembalian
    public function penyimpanan()
    {
        $model = new ModelPengembalian();
    
        // Jika TanggalPeminjaman tidak diisi, gunakan tanggal sekarang
        $tanggalPinjam = $this->request->getPost('Tanggal_Pengembalian') ?? date('Y-m-d');
    
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'Tanggal_Pengembalian' => $tanggalPinjam,
        ];
    
        $model->insert($data);
        return redirect()->to('/pengembalian');
    }

    // Mengupdate data pengembalian
    public function update($id)
    {
        $model = new PengembalianModel();
        $data = [ 
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
        ];
        $model->update($id, $data);
        return redirect()->to('/pengembalian');
    }

    // Menghapus data pengembalian
    public function delete($id)
    {
        if ($this->pengembalianModel->delete($id)) {
            return redirect()->to('/pengembalian')->with('success', 'Data pengembalian berhasil dihapus.');
        } else {
            return redirect()->to('/pengembalian')->with('error', 'Gagal menghapus data pengembalian.');
        }
    }
}
