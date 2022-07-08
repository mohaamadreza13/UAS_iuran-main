<?php

namespace App\Controllers;

use App\Models\KasModel;
use App\Models\DaftarModel;


class Daftar extends BaseController
{

  protected $KasModel;
  public function __construct()
  {
    $this->KasModel = new KasModel();
    $this->DaftarModel = new DaftarModel();
  }

  public function index()
  {

    $keyword = $this->request->getVar('keyword');

    if ($keyword) {
      $warga = $this->KasModel->search($keyword);
    } else {
      $warga = $this->KasModel;
    }

    // $total = $this->db->select('SUM(jumlah) as total');

    $data = [
      'title' => 'Daftar KAS Warga',
      'kas' => $this->KasModel->getAll(),
      'total' => $this->KasModel->total(),
      'bulan' => $this->KasModel->bulan(),
    ];

    return view('daftar/index', $data);
  }


  // public function create()
  // {
  //   session();
  //   $data = [
  //     'title' => 'Tambah KAS Warga',
  //     'validation' => \Config\Services::validation(),
  //   ];
  //   return view('daftar/create', $data);
  // }

  public function save()
  {

    if (!$this->validate([
      'keterangan' => [
        'rules' => 'required|max_length[100]|min_length[5]',
        'errors' => [
          'required' => ' wajib diisi',
          'max_length' => 'maksimal 500 karakter',
          'min_length' => 'minimal 10 karakter',
        ],
      ],
      'jumlah' => [
        'rules' => 'required|numeric|max_length[3]|min_length[2]',
        'errors' => [
          'required' => 'wajib diisi',
          'numeric' => ' wajib diisi angka',
          'max_length' => 'maksimal Rp.900.000 = 900 untuk pembayaran',
          'min_length' => 'minimal Rp.10.000 = 10 untuk pembayaran',
        ],
      ],
      'warga_id' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'wajib diisi',
          'numeric' => ' wajib diisi angka',
        ],
      ],
    ])) {
      $validation = \Config\Services::validation();
      return redirect()->to('/daftar/create/')->withInput()->with('validation', $validation);
    }

    $data = [
      'warga_id' => $this->request->getVar('warga_id'),
      'keterangan' => $this->request->getVar('keterangan'),
      'tanggal' => $this->request->getVar('tanggal'),
      'bulan' => $this->request->getVar('bulan'),
      'tahun' => $this->request->getVar('tahun'),
      'jumlah' => $this->request->getVar('jumlah'),
      'nama' => $this->request->getVar('nama'),
    ];
    $this->KasModel->save($data);

    session()->setFlashdata('pesan', 'Kas berhasil ditambahkan');
    return redirect()->to('/daftar');
  }

  public function delete($id = null)
  {
    $this->KasModel->where('id', $id)->delete();
    session()->setFlashdata('pesan', 'Kas berhasil dihapus');
    return redirect()->to('/daftar');
  }

  public function total()
  {
    $data = [
      'title' => 'Daftar KAS Warga',
      'kas' => $this->KasModel->getAll(),
      'total' => $this->KasModel->total(),
      'bulan' => $this->KasModel->bulan(),
    ];

    return view('laporan/index', $data);
  }


  public function kas()
  {


    $data = [
      'title' => 'Daftar yang belum bayar KAS',
      'kas' => $this->KasModel->getAll()
    ];

    return view('laporan/kas', $data);
  }
}
