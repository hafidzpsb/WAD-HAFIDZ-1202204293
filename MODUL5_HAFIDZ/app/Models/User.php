<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function showroom()
    {
        return $this->hasMany('App\Models\Showroom');
    }
    protected $table = 'users';
    protected $guarderd = ['id'];
    protected $fillable = ['name','no_hp','email','password'];
}