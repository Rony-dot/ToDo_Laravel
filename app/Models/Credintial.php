<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credintial extends Model
{
    use HasFactory;
    protected $fillable = ['user_name','password'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
