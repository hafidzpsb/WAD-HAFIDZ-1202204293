<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $table = "forum";
    protected $guarded = ['id'];
    protected $fillable = [
        'forum_id',
        'username',
        'judul_forum',
        'isi_forum',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
