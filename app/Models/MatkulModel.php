<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;
    protected $table = 'matkul';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'id',
        'nama_matkul',
        'sks',
        'jam',
    ];
}
