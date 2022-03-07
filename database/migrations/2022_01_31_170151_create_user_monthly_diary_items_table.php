<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMonthlyDiaryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_monthly_diary_items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_monthly_diary_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('user_monthly_diaries')
            ->delete('restrict')
            ->update('cascade');
            $table->string('content');
            $table->string('link')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('user_monthly_diary_items');
    }
}
