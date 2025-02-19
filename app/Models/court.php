<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class court extends Model
{
    public function type(){
        return $this->belongsTo(court_type::class, 'court_type_id');
    }
}
