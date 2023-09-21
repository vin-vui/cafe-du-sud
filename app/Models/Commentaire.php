<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Commentaire extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'statut',
        'pseudo',
        'date_publication',
        'contenu',
    ];


    public function articles() : BelongsTo
    {
        return $this->BelongsTo(Article::class);
    }
}
