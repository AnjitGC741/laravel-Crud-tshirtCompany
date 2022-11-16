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
        Schema::create('for_tshirt_shops', function (Blueprint $table) {
            $table->id();
            $table->integer('BN');
            $table->integer('Quanity');
            $table->date('dateOfManifacture');
            $table->string('status');
            $table->string('remark',200);
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
        Schema::dropIfExists('for_tshirt_shops');
    }
};
