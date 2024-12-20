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
        Schema::create('koss', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->text('alamat');
            $table->decimal('price', 15, 2);
            $table->string('list1', 15);
            $table->string('list2', 15);
            $table->string('list3', 15);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koss');
    }
};
