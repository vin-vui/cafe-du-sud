<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'type',
        'url',
        'publication_date',
        'begin_date',
        'end_date',
        'status',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function booted()
    {
        static::creating(function ($article) {
            $article->slug = Str::slug($article->title);
        });

        static::updating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeNextThreeEvents($query)
    {
        return $query->where('type', 'event') // prends les articles avec le type event - SELECT * FROM articles WHERE type = 'event'
            ->where('begin_date', '>', now()) // prends les événements à venir uniquement - AND begin_date > NOW()
            ->where('status', 'published') // prend les articles avec le statut "published" - AND status = 'published'
            ->orderBy('begin_date', 'asc') // tris les événements par date de début croissant - ORDER BY begin_date ASC
            ->take(3); // récupère les 3 prochains événements - LIMIT 3;
    }

    public function scopeNextEvents($query)
    {
        return $query->where('type', 'event') // prends les articles avec le type event - SELECT * FROM articles WHERE type = 'event'
            ->where('begin_date', '>', now()) // prends les événements à venir uniquement -  AND begin_date > NOW()
            ->where('status', 'published') // prend les événements avec le statut "published" -  AND status = 'published'
            ->orderBy('begin_date', 'asc'); // tris les événements par date de début croissant - ORDER BY begin_date ASC;
    }

    public function scopePost($query)
    {
        return $query->where('type', 'post') // prends les articles avec le type blog - SELECT * FROM articles  WHERE type = 'blog'
            ->where('status', 'published') // prend les articles de blog avec le statut "published" - AND status = 'published'
            ->orderBy('publication_date', 'asc'); // tris les articles par date de début croissant - ORDER BY publication_date ASC;
    }
}
