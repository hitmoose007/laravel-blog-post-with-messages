<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'body'
    ];
    public function likedBy(User $user ){
        return $this->likes->contains('user_id',$user->id);
    }
    
    public function userComment(){
        return $this->belongsTo(User::class,Post::class);
    }
}
