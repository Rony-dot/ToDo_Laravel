<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name','id','status','address','email'];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function credintial()
    {
        return $this->hasOne(Credintial::class);
    }
    public function todomodels()
    {
        return $this->hasMany(TodoModel::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user')
            ->withTimestamps();
    }

}
