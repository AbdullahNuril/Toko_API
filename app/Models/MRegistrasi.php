<?php

namespace app\Models;

use CodeIgniter\Model;

class MRegistrasi extends Model{
    protected $table ='member';
    protected $allowedFields = ['Nama', 'Email', 'Password'];
}