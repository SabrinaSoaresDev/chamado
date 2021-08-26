<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('imei',15)->nullable();
            $table->boolean('tested');
            $table->string('storage')->nullable();
            $table->string('password')->nullable();
            $table->string('accessories')->nullable();
            $table->boolean('backup');
            $table->string('state')->nullable();
            $table->string('problems_found')->nullable();
            $table->string('problems_reported')->nullable();
            $table->string('comments')->nullable();
            $table->foreignId('equiment_types_id')->nullable()->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('service_orders_id')->constrained();
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
        Schema::dropIfExists('equipment');
    }
}
