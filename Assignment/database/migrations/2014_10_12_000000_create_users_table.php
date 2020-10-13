<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('user_type',['admin','staff','doctors','patient'])->nullable();
            $table->enum('status',['active','inactive'])->nullable();
            $table->string('password');
            $table->string('profile')->nullable();
            $table->enum('gender',['male','female','others'])->nullable();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('blood_group')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
