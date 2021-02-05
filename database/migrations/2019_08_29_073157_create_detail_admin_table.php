<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_admin', function (Blueprint $table) {
            $table->integer('id_admin');
            $table->String('nama',30);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->String('gender');
            $table->timestamps();
            $table->primary(['id_admin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_admin');
    }
}
