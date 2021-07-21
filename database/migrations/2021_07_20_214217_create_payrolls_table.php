<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('employee_id');
			$table->string('basic_salary')->nullable();
			$table->string('house_rent_allowance')->nullable();
			$table->string('medical_allowance')->nullable();
			$table->string('special_allowance')->nullable();
			$table->string('provident_fund_contribution')->nullable();
			$table->string('other_allowance')->nullable();
			$table->string('paye_deduction')->nullable();
			$table->string('zero_paye_deduction')->nullable();
			$table->string('nassa_deduction')->nullable();
			$table->string('pension_deduction')->nullable();
			$table->string('period_earning_deduction')->nullable();
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
        Schema::dropIfExists('payrolls');
    }
}
