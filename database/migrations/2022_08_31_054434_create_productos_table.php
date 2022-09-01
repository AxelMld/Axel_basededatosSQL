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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('descripcion', 100);
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('sucursal_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('categoria_id')
                ->references('id')->on('categorias')
                ->onDelete('set null');

            $table->foreign('sucursal_id')
                ->references('id')->on('sucursals')
                ->onDelete('set null');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null');



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
};
