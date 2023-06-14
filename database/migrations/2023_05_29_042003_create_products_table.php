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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("category_id"); //tabel wajib diisi
            $table->string("name");
            $table->bigInteger("price")->default(0); //artinya jika tabel price ini tidak diisi maka scr langsung terisi dengan angka 0
            $table->bigInteger("sale_price")->default(0); //artinya jika tabel price ini tidak diisi maka scr langsung terisi dengan angka 0
            $table->string("brands")->nullable(); //boleh jika tabel tidak diisi
            $table->integer("rating")->default(0);
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
        Schema::dropIfExists('products');
    }
};
