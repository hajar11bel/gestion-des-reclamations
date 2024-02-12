<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'cin',
        'date_naissance',
        'domaine_id'
        
    ];
}
