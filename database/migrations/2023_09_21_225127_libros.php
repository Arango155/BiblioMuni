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
        Schema::create('libros', function (Blueprint $table){
            $table->id();
            $table->string('nombre', 100);
            $table->string('autor', 60);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('estado_id'); // Add this line
            $table->string('descripcion', 300);
            $table->string('img', 3000)->default("https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.webp?b=1&s=170667a&w=0&k=20&c=mBzy59I9bsnIZovbYsdUWVntwTFpbOAa3TTByYo7lG4=");
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
