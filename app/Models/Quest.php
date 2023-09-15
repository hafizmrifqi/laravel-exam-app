<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'modul_id',
        'question',
        'answer'
    ];

    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }
}
