<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Type extends Model
{
    use HasFactory;

    public function post(){
        return $this->belongsTo(Post::class, 'type_id', 'id');
    }
}
