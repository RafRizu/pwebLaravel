<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'tag',
        'slug',
        'about',
        'id_user',
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
