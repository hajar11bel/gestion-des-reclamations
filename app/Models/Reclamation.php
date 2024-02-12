<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'statu',
        'raison',
        'departement_id',
        'personnel_id',
        'user_id'
        
    ];
}
