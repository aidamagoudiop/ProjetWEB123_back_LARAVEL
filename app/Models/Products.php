<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // date de creation et derniere modification  false
    public $timestamps = false;  
    // les colonnes qu'il faut choisir
    protected $fillable = ['reference','description','quantite','prix'];
}
