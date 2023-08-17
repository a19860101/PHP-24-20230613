<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
        Schema::create('article_tag',function(Blueprint $table){
            $table->id();
            $table->foreignId('article_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('tag_id')->nullable()->constrained()->nullOnDelete();
            $table->timeStamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_tag',function(){
            $table->dropForeign(['tag_id']);
            $table->dropForeign(['article_id']);
        });
        Schema::dropIfExists('tags');
        Schema::dropIfExists('article_tag');
    }
};
