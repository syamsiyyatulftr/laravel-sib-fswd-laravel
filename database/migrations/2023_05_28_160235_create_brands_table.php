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
    public function up() //ketika menjalankan yang dijalankkan/eksekusi ini,
    {
        Schema::create('brands', function (Blueprint $table) { // akan melakukan create tabel brands 
            $table->id(); //kenapa sintaknya tidak $table->integer('id'); ? Sebenarnya sama saja tetapi nanti akan ngebug
  
            // perintah  $table->timestamps(); itu tidakk wajib digunakan
            $table->timestamps(); // sintak ini di tabel akan membuat 2 kolom secara otomatis yaitu, create_at dan update_at TIMESTIME
                                    // knp? karena ini akan me insert data baru/bais baru create_at ini akan terisi scr otomatis sesuai tanggal data
                                    // itu masuk ke database sehingga update_at akan NULL isinya
                                    //Ketika data ini dilakukan perubahan baru update_at nya berubah
                                    //jika sudah ada create_at update_at di dalam tabel tsb ini akan mempermudah developer mengecek kapan data tsb dibuat dan kapan data diperbarui
            $table->string('name'); // table mengikuti (Blueprint $table), string tipe datanya dari kolom 'name'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //ketika ingin me rollback/undo yang dijalankkan/eksekusi perintah ini
    {
        Schema::dropIfExists('brands'); //bilang ke database kalau ada tabel brands, misal ini kita sudah buat tabel brands
                                        //kemudian ingin dikembalikan/diundo yang di jalankan pertintah down ini jadi kalau ada
                                        //drop aja tabelnya nama tabelnya tabelnya adalah brands

        
    }
};


//Jadi intinya bisa melakukan eksekusi/menjalankan perintah create(up) atau rollback/undo(down)
