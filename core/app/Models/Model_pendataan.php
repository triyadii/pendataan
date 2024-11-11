<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pendataan extends Model
{
    protected $table                = 'tbl_pendataan';
    protected $primaryKey           = 'idPendataan';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['user', 'nik', 'nama', 'alamat', 'kecamatan', 'desa'];
}
