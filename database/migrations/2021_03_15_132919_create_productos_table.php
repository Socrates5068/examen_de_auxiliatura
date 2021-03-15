<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('telefono', 50);
            $table->string('detalle', 100);
            $table->string('imagen', 100)->nullable();
            $table->string('precio', 50)->nullable();
            $table->uuid('uuid', 50)->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea el mensaje');
            $table->foreignId('categoria_id')->references('id')->on('categorias')->comment('categoria del producto');
            $table->foreignId('comentario_id')->references('id')->on('comentarios')->comment('comentario del producto');
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
        Schema::dropIfExists('productos');
    }
}
