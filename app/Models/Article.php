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

    public function scopeProchainsEvenements($query)
    {
        return $query->where('type', 'evenement') // prends les articles avec le type evenement
            ->where('date_debut', '>', now()) // prends les evenements à venir uniquement
            ->orderBy('date_debut', 'asc') // tris les evenements par date de début croissant
            ->take(3); // récupére les 3 prochains événements
    }
}
