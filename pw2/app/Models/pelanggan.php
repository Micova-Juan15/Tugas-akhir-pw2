<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */

    protected $table = 'pelanggan';

    public $incrementing = false;

    protected $primaryKey = 'id_pelanggan';

    protected $keyType = 'string';

    protected $fillable = [
        'id_pelanggan','nama_pelanggan','email','alamat','no_telp','tanggal_lahir','jenis_kelamin',
    ];

}
