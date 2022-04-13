<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->string('contenue_audio');
            $table->foreignId('langue_id')->constrained('langue')->onDelete('cascade');
            $table->foreignId('livre_id')->constrained('livre')->onDelete('cascade');
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
        schema::table('audio', function (Blueprint $table){
            $table->dropConstrainedForeignId('langue_id');
            $table->dropConstrainedForeignId('livre_id');
        });
        Schema::dropIfExists('audio');
    }
}
