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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clubs_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->longText('photo');
            $table->string('name');
            $table->string('old')->nullable();
            $table->string('nationality');
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
        Schema::table('clubs', function (Blueprint $table) {
            $table->dropForeign(['clubs_id']);
        });
        Schema::dropIfExists('managers');
    }
};
