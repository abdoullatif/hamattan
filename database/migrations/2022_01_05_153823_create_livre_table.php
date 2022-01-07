<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livre', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('resume_livre');
            $table->string('biographie_auteur');
            $table->string('statut');
            $table->string('categorie');
            $table->string('prix');
            $table->string('couverture_livre');
            $table->string('date_publication');
            $table->foreignId('theme_id')->constrained('theme')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('livre', function (Blueprint $table){
            $table->dropConstrainedForeignId('theme_id');
        });
        Schema::dropIfExists('livre');
    }
}
