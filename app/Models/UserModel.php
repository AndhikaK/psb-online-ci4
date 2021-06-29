<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'username', 'password', 'role', 'nisn', 'nama', 'jk', 'alamat', 'ttl', 'tempat-lahir', 'status', 'nilai-matematika', 'nilai-inggriss', 'foto'];
}
