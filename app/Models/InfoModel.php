<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{

  protected $table = 'info';

  public function getInfo()
  {
    $builder = $this->table('info');
    // $builder->join('warga', 'info.warga_id = warga.id');
    $builder->join('iuran', 'info.iuran_id = iuran.id');
    $builder->select('iuran.*');
    $query = $builder->get();
    return $query->getResult();
  }
}
