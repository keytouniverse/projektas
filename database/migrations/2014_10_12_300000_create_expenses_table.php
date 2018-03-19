<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-03-19
 * Time: 15:39
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->index();
            $table->timestamp('created_at');
            $table->double('amount');
            $table->integer('categories_id')->unsigned();

        });

        Schema::table('expenses', function($table) {
            $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}