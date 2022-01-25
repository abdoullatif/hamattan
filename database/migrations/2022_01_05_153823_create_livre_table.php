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
            $table->text('resume_livre');
            $table->text('biographie_auteur');
            $table->string('statut');
            $table->string('categorie');
            $table->string('type_vente');
            $table->string('prix');
            $table->string('couverture_livre');
            $table->string('extraire');
            $table->string('date_publication');
            $table->foreignId('theme_id')->constrained('theme')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->string('flagtransmis');
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
            $table->dropConstrainedForeignId('users_id');
        });
        Schema::dropIfExists('livre');
    }
}
