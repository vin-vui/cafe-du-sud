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
        return $query->where('type', 'evenement') // prends les articles avec le type evenement - SELECT * FROM articles WHERE type = 'evenement'
            ->where('begin_date', '>', now()) // prends les evenements à venir uniquement - AND begin_date > NOW()
            ->where('status', 'en ligne') // prend les articles avec le statut "en ligne" - AND status = 'en ligne'
            ->orderBy('begin_date', 'asc') // tris les evenements par date de début croissant - ORDER BY begin_date ASC
            ->take(3); // récupére les 3 prochains événements - LIMIT 3;
    }

    public function scopeNextEvents($query)
    {
        return $query->where('type', 'evenement') // prends les articles avec le type evenement - SELECT * FROM articles WHERE type = 'evenement'
            ->where('begin_date', '>', now()) // prends les evenements à venir uniquement -  AND begin_date > NOW()
            ->where('status', 'en ligne') // prend les evenements avec le statut "en ligne" -  AND status = 'en ligne'
            ->orderBy('begin_date', 'asc'); // tris les evenements par date de début croissant - ORDER BY begin_date ASC;
    }

    public function scopeBlog($query)
    {
        return $query->where('type', 'blog') // prends les articles avec le type blog - SELECT * FROM articles  WHERE type = 'blog'
            ->where('status', 'en ligne') // prend les articles de blog avec le statut "en ligne" - AND status = 'en ligne'
            ->orderBy('publication_date', 'asc'); // tris les articles par date de début croissant - ORDER BY publication_date ASC;
    }
}
