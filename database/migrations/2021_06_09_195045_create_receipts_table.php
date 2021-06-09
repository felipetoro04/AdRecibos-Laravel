<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEnterprice')->constrained('enterprices');
            $table->string('numberReceipt');                           
            $table->date('issueDate');
            $table->date('expirationDate');
            $table->integer('amountPayable');
            $table->foreignId('idStatus')->constrained('parameters');
            $table->foreignId('idUser')->constrained('users');
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
        Schema::dropIfExists('receipts');
        Schema::enableForeignKeyConstraints();
    }
}
