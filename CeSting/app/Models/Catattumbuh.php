<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catattumbuh extends Model
{
    use HasFactory;
    protected $table = 'catattumbuh';
    protected $primaryKey = 'id';
    protected $fillable = [
        'anak_id',
        'tinggi_badan_anak',
        'berat_badan_anak',
        'lingkar_kepala_anak',
    ];
    public function profilanak()
    {
        return $this->belongsTo('App\Models\Profilanak');
    }
}
