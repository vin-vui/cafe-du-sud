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
        'title',
        'content',
        'type',
        'url',
        'publication_date',
        'begin_date',
        'end_date',
        'status',
    ];

    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeNextThreeEvents($query)
    {
        return $query->where('type', 'evenement') // prends les articles avec le type evenement
            ->where('begin_date', '>', now()) // prends les evenements à venir uniquement
            ->where('status', 'en ligne') // prend les articles avec le statut "en ligne"
            ->orderBy('begin_date', 'asc') // tris les evenements par date de début croissant
            ->take(3); // récupére les 3 prochains événements
    }

    public function scopeNextEvents($query)
    {
        return $query->where('type', 'evenement') // prends les articles avec le type evenement
            ->where('begin_date', '>', now()) // prends les evenements à venir uniquement
            ->where('status', 'en ligne') // prend les evenements avec le statut "en ligne"
            ->orderBy('begin_date', 'asc'); // tris les evenements par date de début croissant
    }

    public function scopeBlog($query)
    {
        return $query->where('type', 'blog') // prends les articles avec le type blog
            ->where('status', 'en ligne') // prend les articles de blog avec le statut "en ligne"
            ->orderBy('begin_date', 'asc'); // tris les articles par date de début croissant
    }
}
