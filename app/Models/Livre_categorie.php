<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre_categorie extends Model
{
    use HasFactory;

    protected $fillable = ['livre_id', 'categorie_id'];

    protected $table = 'livre_categorie';
}
