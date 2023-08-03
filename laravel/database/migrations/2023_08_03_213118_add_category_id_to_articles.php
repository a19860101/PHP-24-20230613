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
        Schema::table('articles', function (Blueprint $table) {
            //
            $table->foreignId('category_id')->after('title')->nullable()->constrained()->nullOnDelete();
            // $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();
            // $table->foreignId('category_id')->nullable()->constrained()->restrictOnDelete();
            //先建立欄位，在建立關聯(外部鍵)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
