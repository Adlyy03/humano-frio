<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'role',
        'foto',
        'linkedin',
        'github',
        'instagram',
        'skills',
        'quote',
    ];
}
