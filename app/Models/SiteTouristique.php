<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteTouristique extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'localisation',
        'image',
        'accessibility',
    ];
}
