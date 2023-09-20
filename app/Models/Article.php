<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'titre',
        'contenu',
        'type',
        'url',
        'date_publication',
        'date_debut',
        'date_fin',
        'statut',
    ];

}
