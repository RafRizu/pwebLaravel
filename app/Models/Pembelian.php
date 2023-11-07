<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
        protected $table = 'pembelians';
        protected $primaryKey = 'nomor_beli';
        public $timestamps = true;
        protected $fillable = [
        'tgl_beli',
        'no_faktur',
        'total_beli',
        'kode_brg',
        'created_at',
        'updated_at',
    ];
}
