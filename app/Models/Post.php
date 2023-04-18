<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // all the datas in migration Post
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'thumbnail'
    ];

    public function user()
    {
        //get relevent user
        return $this->belongsTo(User::class, 'user_id');
    }
}
