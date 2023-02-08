<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ordinateurs', function (Blueprint $table) {
            $table->id('ido');
            $table->string('marque');
            $table->string('libele');
            $table->string('image');
            $table->text('description');
            $table->date('dateacha');
            $table->float('prix');
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
        Schema::dropIfExists('ordinateurs');
    }
};
