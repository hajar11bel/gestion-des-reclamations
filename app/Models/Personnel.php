<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Personnel  extends Authenticatable
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

    public function domaine(){
        return $this->belongsTo(Domaine::class);
    }
}
