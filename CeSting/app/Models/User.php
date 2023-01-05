<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'username',
        'password',
    ];
    public function profil()
    {
        return $this->hasOne(Profil::class);
    }
    public function forum()
    {
        return $this->hasMany(Forum::class);
    }
}
