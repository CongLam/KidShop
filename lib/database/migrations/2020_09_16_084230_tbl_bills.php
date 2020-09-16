<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bills', function (Blueprint $table) {
            $table->increments('bill_id');
            $table->integer('bill_cus_id')->unsigned();
            $table->date('bill_dateorder');
            $table->float('bill_total');
            $table->string('bill_payment');
            $table->text('bill_note');
            $table->text('cus_address');

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
        Schema::dropIfExists('tbl_bills');
    }
}
