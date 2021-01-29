<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crear la tabla
         Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('link')->unique();
            $table->timestamps();
        });

         //En la tabla Proyectos
        Schema::table('projects', function (Blueprint $table)
        {
            //Agregar el id de la tabla de categorias
            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            //Setear como foreign y la referencia a categorias, SIN Cascada
            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //En la tabla proyects
        Schema::table('projects', function (Blueprint $table)
        {
            //SE dropea la constraint de la llave foranea primero!!!!!!!!!!!!!
            $table->dropForeign('projects_category_id_foreign');
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('categories');
    }
}
