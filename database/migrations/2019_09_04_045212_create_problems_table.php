<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->text('answer')->comment('标准答案');
            $table->text('stimulation')->comment('仿真文件');
            $table->smallInteger('difficulty')->comment('难度');
            $table->integer('total_solved')->comment('总解决次数');
            $table->integer('total_submit')->comment('总提交次数');
            $table->json('tags')->comment('标签');
            $table->json('wavedrom')->comment('储存wavedrom的json');
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
        Schema::dropIfExists('problems');
    }
}
