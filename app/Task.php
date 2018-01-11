<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    
    public function comment()
    {
        return $this->hasOne('App\Comment');
    }
}
