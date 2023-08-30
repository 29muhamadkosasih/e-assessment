<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;
    protected $table = 'kompetensi';
    protected $guarded = [];


    public function skema()
    {
        return $this->belongsTo(Skema::class, 'nama_skema_id');
    }

    public function kompetensi()
    {
        return $this->hasMany(Personaldetail::class);
    }
}