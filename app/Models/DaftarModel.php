<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
  protected $table = 'warga';
  protected $allowedFields = ['nik', 'nama', 'kelamin', 'alamat', 'no_rumah', 'status'];


  public function getDaftar($nik = false)
  {
    if ($nik === false) {
      return $this->paginate(10, 'warga');
    }

    return $this->where([
      'nik' => $nik
    ])->first();
  }

  // public function total(){

  // }

  public function search($keyword)
  {
    $builder = $this->table('warga');
    $builder->like('nik', $keyword);
    $builder->orLike('nama', $keyword);
    $builder->orLike('alamat', $keyword);
    $builder->orLike('no_rumah', $keyword);
    return $builder;
  }
}
