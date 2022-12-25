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
        Schema::create('afrequests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('port_id_ld');
            $table->foreign('port_id_ld')->references('id')->on('ports');
            $table->unsignedBigInteger('port_id_dc')->nullable();
            $table->foreign('port_id_dc')->references('id')->on('ports');
            $table->float('weight')->nullable();
            $table->float('volume')->nullable();
            $table->string('commodity')->nullable();
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('terms_id')->nullable();
            $table->foreign('terms_id')->references('id')->on('terms');
            $table->unsignedBigInteger('shipper_id')->nullable();
            $table->foreign('shipper_id')->references('id')->on('shipments');
            $table->unsignedBigInteger('consignee_id')->nullable();
            $table->foreign('consignee_id')->references('id')->on('consignments');
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
        Schema::dropIfExists('afrequests');
    }
};
