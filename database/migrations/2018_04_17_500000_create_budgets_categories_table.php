<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-04-17
 * Time: 02:32
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->index();
            $table->integer('categories_id')->unsigned();
            $table->integer('budget_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('budget_id')->references('id')->on('budget');
            $table->double('amount');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets_categories');
    }
}