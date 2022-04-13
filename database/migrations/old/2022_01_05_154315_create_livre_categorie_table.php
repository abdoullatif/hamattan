<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivreCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livre_categorie', function (Blueprint $table) {
            $table->id();
            //$table->string('livre_idlivre');
            $table->foreignId('livre_id')->constrained('livre')->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categorie')->onDelete('cascade');
            //$table->foreign('categorie_id')->references('id')->on('categorie')->onUpdate('cascade')->onDelete('cascade');
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
        schema::table('livre_categorie', function (Blueprint $table){
            $table->dropConstrainedForeignId('livre_id');
            $table->dropConstrainedForeignId('categorie_id');
        });
        Schema::dropIfExists('livre_categorie');
    }
}
