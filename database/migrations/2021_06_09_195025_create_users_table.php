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
            $table->foreignId('idTypeDoc')->constrained('parameters');
            $table->string('numberDoc');
            $table->string('name');
            $table->foreignId('idTypeSex')->constrained('parameters');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('idProfile')->constrained('profiles');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('users');
    }
}
