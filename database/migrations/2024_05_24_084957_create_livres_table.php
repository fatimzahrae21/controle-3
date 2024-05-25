<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date_publication');
            $table->float('prix');
            $table->unsignedBigInteger('id_auteur')->nullable();
            $table->foreign('id_auteur')->references('id')->on('auteurs')->onDelete('cascade');
            $table->timestamps();
 });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
