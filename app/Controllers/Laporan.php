<?php

namespace App\Controllers;

use App\Models\InfoModel;
use App\Models\KasModel;
use App\Models\DaftarModel;

class Laporan extends BaseController
{
  protected $InfoModel;
  public function __construct()
  {
    $this->InfoModel = new InfoModel();
    $this->KasModel = new KasModel();
    $this->DaftarModel = new DaftarModel();
  }
  public function index()
  {

    $data = [
      'title' => 'Laporan KAS Warga',
      'info' => $this->InfoModel->getInfo(),
    ];
    return view('laporan/index', $data);
  }

}
