<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->enum('gender',['male','female','others'])->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('appointments_for')->nullable();
            $table->string('appointments_date')->nullable();
            $table->string('message')->nullable();
            $table->string('depart')->nullable();
            $table->enum('status',['active','inactive'])->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
