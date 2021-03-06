<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{

    use HasFactory;

    public function subject(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Subject::class);
    }
}
