<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;
        protected $table = 'fakturs';
        protected $primaryKey = 'no_faktur';
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
