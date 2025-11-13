<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('bell_qs', function (Blueprint $table) {
        $table->id();
        $table->string('subject');   // nama bell
        $table->string('sound');     // nama file / path sound
        $table->time('start_time');  // waktu mulai bel
        $table->time('end_time');    // waktu berhenti bel
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('bell_qs');
    }
};
