<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory; 
 
    // Habilitar la asignación masiva 
    protected $fillable = ['name', 'species', 'age']; 
}
