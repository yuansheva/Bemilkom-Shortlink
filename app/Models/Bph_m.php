<?php

namespace App\Models;

use CodeIgniter\Model;

class Bph_m extends Model
{
    protected $table      = 'bph';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'dinas'];

}
