<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('classes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('mentor_id');
        $table->string('title');
        $table->timestamps();

        $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
