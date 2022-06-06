<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'id_pegawai','nama_pelanggan','email','alamat','no_telp','tanggal_lahir','jenis_kelamin',
    ];

    public $incrementing = false;

    protected $keyType = 'string';
}
