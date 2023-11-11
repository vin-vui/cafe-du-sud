<?php

use Illuminate\Database\Migrations\Migration; // Importe la classe de base pour les migrations de base de données
use Illuminate\Database\Schema\Blueprint; // Importe la classe Blueprint utilisée pour définir la structure de la table
use Illuminate\Support\Facades\Schema; // Importe la classe Schema qui permet d'interagir avec la base de données via des migrations

return new class extends Migration
{
    /**
     * Cette méthode définit la migration pour créer la table 'articles'
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Colonne d'ID auto-incrémentée
            $table->string('title');
            $table->text('content');
            $table->enum('type', ['evenement', 'blog']);
            $table->string('url');
            $table->date('publication_date');
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['en attente', 'en ligne']);
        });
    }

    /**
     * Cette méthode définit comment annuler la migration en cas d'exécution de la fonction rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
