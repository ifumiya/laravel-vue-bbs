<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
