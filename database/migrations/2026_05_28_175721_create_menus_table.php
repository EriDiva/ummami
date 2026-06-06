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
        Schema::create('menus', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->integer('harga');

            $table->string('gambar');

            $table->decimal('rating',2,1)->default(4.5);

            $table->integer('terjual')->default(0);

            $table->string('kategori');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
