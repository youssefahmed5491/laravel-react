<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    protected $connection = "mysql2";
    protected $fillable = [
        "username",
        "email",
        "passowrd"
    ];
    use HasFactory;
    public function QS_Bank()
    {
        return $this->belongsToMany('App\Models\QS_Bank');
    }

    public function subject()
    {
        return $this->belongsToMany('App\Models\subject');
    }

    public function proctor()
    {
        return $this->belongsToMany('App\Models\proctor');
    }
}