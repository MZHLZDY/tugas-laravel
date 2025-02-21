<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function court() 
    {
        return $this->belongsTo(Court::class, 'court_id');
    }
}
