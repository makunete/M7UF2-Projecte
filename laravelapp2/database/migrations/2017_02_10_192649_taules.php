<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*use App\Categoria;
use App\Videojuego;
use App\Venta;
*/
class Taules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categorias', function(Blueprint $table) {
            $table->increments("id");
            $table->string("nombre");
            $table->string("videojuegos");
            $table->timestamps();
        });

        Schema::create('videojuegos', function(Blueprint $table) {
            $table->increments("id");
            $table->string("nombre");
            $table->float("precio");
            $table->string("categorias");
            $table->timestamps();
        });

        Schema::create('ventas', function(Blueprint $table) {
            $table->increments("id");
            $table->string("videojuego");
            $table->integer("num_ventas");
            $table->timestamps();
        });
        Schema::create('categorias_videojuegos', function(Blueprint $table) {
            $table->integer("id_intermedia");
            $table->integer("id_categoria")->unsigned();
            $table->integer("id_videojuego")->unsigned();

        });

        Schema::table('categorias_videojuegos',function(Blueprint $table) {
            $table->foreign("id_categoria")->references('id')->on('categorias')
                    ->onUpdate('cascade')->onDelete('cascade');
        });

            Schema::table('categorias_videojuegos',function(Blueprint $table) {
            $table->foreign("id_videojuego")->references('id')->on('videojuegos')
                    ->onUpdate('cascade')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("categorias");
        Schema::drop("videojuegos");
        Schema::drop("ventas");
        Schema::drop("categorias_videojuegos");
    }
}
