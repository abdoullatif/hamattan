<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 
        'resume_livre', 
        'biographie_auteur', 
        'statut', 
        'categorie', 
        'prix', 
        'couverture_livre', 
        'date_publication', 
        'theme_id', 
        'users_id',
        'flagtransmis'
    ];

    protected $table = 'livre';

}
