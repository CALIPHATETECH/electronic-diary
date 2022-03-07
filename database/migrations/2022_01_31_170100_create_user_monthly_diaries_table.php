<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMonthlyDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_monthly_diaries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('users')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('month_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('months')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('year_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('years')
            ->delete('restrict')
            ->update('cascade');
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
        Schema::dropIfExists('user_monthly_diaries');
    }
}
