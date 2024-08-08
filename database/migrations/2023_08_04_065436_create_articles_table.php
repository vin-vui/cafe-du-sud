<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->enum('type', ['event', 'post']);
            $table->string('url');
            $table->date('publication_date');
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['draft', 'published', 'unpublished']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
