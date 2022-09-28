<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
		    $table->id();
            $table->string('current_month')->nullable();
            $table->string('income_sourse')->default('Air Ticket Sell');
            $table->integer('total_ticket_sell');
            $table->decimal('selling_amount',10,2)->default(00.00);
            $table->double('profit_amount',10,2)->default(00.00);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
