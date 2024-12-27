<?php

namespace App\Models;

use CodeIgniter\Model;

class ParfumModel extends Model
{
    protected $table = 'parfum';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jenis', 'harga', 'stok'];
    protected $useTimestamps = true;

    // Validasi data (optional)
    protected $validationRules = [
        'nama' => 'required|min_length[3]|max_length[255]',
        'jenis' => 'required|max_length[100]',
        'harga' => 'required|decimal',
        'stok' => 'required|integer',
    ];
}
