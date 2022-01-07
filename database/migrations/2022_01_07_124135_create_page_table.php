<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->id();
            $table->string('page_livre');
            $table->foreignId('livre_id')->constrained('livre')->onDelete('cascade');
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
        schema::table('page', function (Blueprint $table){
            $table->dropConstrainedForeignId('livre_id');
            $table->dropConstrainedForeignId('categorie_id');
        });
        Schema::dropIfExists('page');
    }
}
