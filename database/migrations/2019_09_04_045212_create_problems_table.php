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
            $table->text('answer')->comment('标准答案')->nullable();
            $table->text('template')->comment('声明模板')->nullable();
            $table->text('stimulation')->comment('仿真文件')->nullable();
            $table->string('difficulty', 10)->comment('难度')->default('Mid');
            $table->integer('total_solved')->comment('总解决次数')->default(0);
            $table->integer('total_submit')->comment('总提交次数')->default(0);
            $table->json('tags')->comment('标签')->nullable();
            $table->json('wavedrom')->comment('储存wavedrom的json')->nullable();
            $table->longText('svg')->comment('svg')->nullable();
            $table->boolean('complete')->default(false)->comment('题目是否出的完全');
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
