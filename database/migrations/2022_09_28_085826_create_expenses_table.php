<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('current_month')->nullable();
            $table->enum('expense',['Salary','Office-Rent','Water-Bill','Internet-Bill','Electricity-Bill','Entainment Cost','Office Cleaning Cost','Stationary Expenses','Fixed Asset Dimensions','Miscellaneous'])->nullable();
            $table->decimal('expense_amount',10,2)->default(00.00);
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
        Schema::dropIfExists('expenses');
    }
}
