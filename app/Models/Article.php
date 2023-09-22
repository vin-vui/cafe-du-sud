<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function commentaire(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
