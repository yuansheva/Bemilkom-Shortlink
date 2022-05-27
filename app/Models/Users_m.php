<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_m extends Model
{
    protected $table      = 'tbl_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_name', 'user_email','user_password', 'user_level'];

}
