<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_Pembelian extends Model
{
    use HasFactory;
        protected $table = 'detail__pembelians';
        // protected $primaryKey = 'nomor_beli';
        public $timestamps = true;
        protected $fillable = [
        'qty_beli',
        'kode_brg',
        'nomor_beli',
        'created_at',
        'updated_at',
    ];
}
