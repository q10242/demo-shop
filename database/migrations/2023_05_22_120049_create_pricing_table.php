<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('使用者id');
            $table->integer('priceing')->comment('報價結果');
            $table->json('product_id_list')->comment('使用者報價清單'); // {"商品id": "數量"}
            $table->json('extra_infomation')->comment('自訂詢價表單以及其回答結果'); //{"問題": "回答"}
            $table->json('extra_fee')->comment('額外費用'); // {"項目": "費用"}
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing');
    }
};
