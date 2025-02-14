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
        Schema::create('users', function (Blueprint $table) {
            //會員編號 主鍵
            $table->id();
            //會員名稱
            $table->string('name');
            //會員信箱
            $table->string('email')->unique();
            //會員密碼
            $table->string('password');
            //會員電話
            $table->string('phone_number')->nullable();
            // 帳號類型（type）:用於識別登入會員身份
            //  - A（Admin）: 管理者
            //  - G（General）: 一般會員
            $table->string('type', 1)->default('G');
            //時間戳記
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
