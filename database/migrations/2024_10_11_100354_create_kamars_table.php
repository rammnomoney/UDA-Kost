<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama', 50);
            $table->text('alamat');
            $table->char('kodepos', 5);
            $table->decimal('price', 15, 2);
            $table->json('list');
            $table->text('deskripsi');
            $table->string('judulfitur');
            $table->string('fitur');
            $table->string('status');
            $table->foreignId('kos_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
