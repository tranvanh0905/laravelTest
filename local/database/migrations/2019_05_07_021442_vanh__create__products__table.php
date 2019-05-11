<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VanhCreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image', 100);
            $table->unsignedBigInteger('cate_id');
            $table->float('price');
            $table->char('size', 4);
            $table->longText('color');
            $table->longText('short_desc');
            $table->longText('detail');
            $table->timestamps();
            $table->foreign('cate_id')
                    ->references('id')
                    ->on('Categories')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
