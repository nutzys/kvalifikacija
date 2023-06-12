<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Type;
use App\Models\Location;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'user',
        'type_id',
        'location_id',
        'price',
        'user_id'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function location(){
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
    
    public function type(){
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function applied(){
        return $this->hasMany(AppliedUser::class);
    }

    public function incrementViewCount(){
        $this->view_count = $this->view_count + 1;
        $this->save();
    }

}
