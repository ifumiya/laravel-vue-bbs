<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public $fillable = [
        'message',
        'name',
        'title',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
