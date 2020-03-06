<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('serial');
            $table->unsignedBigInteger('manufacturer_id');
            $table->foreign("manufacturer_id")->references("id")->on("manufacturers")->onDelete('cascade');
            $table->text("description");
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
        Schema::dropIfExists('devices');
    }
}
