<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;

    protected $table = 'stok';

    protected $primaryKey = 'id_barang';

    public $incrementing = false;

    protected $keyType = 'string';

    function barang(){
        return $this->belongsTo(Barang::class, "id_barang", "id_barang");
    }

    protected $fillable = [
        'id_barang', 'jumlah', 'keterangan',
    ];
}
