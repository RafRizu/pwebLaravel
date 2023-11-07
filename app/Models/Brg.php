<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brg extends Model
{
    use HasFactory;
        protected $table = 'brgs';
        protected $primaryKey = 'kd_brg';
        public $timestamps = true;
        protected $fillable = [
        'nm_brg',
        'harga',
        'stok',
        'created_at',
        'updated_at',
    ];
}
