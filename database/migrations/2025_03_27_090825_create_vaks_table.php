<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('vaks', function (Blueprint $table) {
        $table->id();
        $table->string('naam');
        $table->text('beschrijving');
        $table->foreignId('docent_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('vaks');
    }
};
