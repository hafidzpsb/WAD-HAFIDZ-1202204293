<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilanak extends Model
{
    use HasFactory;
    protected $table = 'profilanak';
    protected $primaryKey = 'id';
    protected $fillable = [
        'anak_id',
        'nama_depan_anak',
        'nama_belakang_anak',
        'tanggal_lahir_anak',
    ];
    public function profil()
    {
        return $this->belongsTo('App\Models\Profil');
    }
    public function catattumbuh()
    {
        return $this->hasOne(Catattumbuh::class);
    }
}
