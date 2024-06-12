<?php
namespace App\Models;
use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

    protected $validationRules = [
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
    ];

    protected $validationMessages = [
        'judul' => [
            'required' => 'Judul harus diisi.',
        ],
        'penulis' => [
            'required' => 'Penulis harus diisi.',
        ],
        'penerbit' => [
            'required' => 'Penerbit harus diisi.',
        ],
        'tahun_terbit' => [
            'required' => 'Tahun Terbit harus diisi.',
            'integer' => 'Tahun Terbit harus berupa angka.',
            'greater_than' => 'Tahun Terbit harus lebih besar dari 1800.',
            'less_than' => 'Tahun Terbit harus kurang dari 2024.'
        ]
    ];
}