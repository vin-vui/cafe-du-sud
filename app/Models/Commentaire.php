<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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



    // RELATION BELONG TO ONE ???
    // public function articles() :
    // {
    //     return $this->(Article::class);
    // }
}
