<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // ニュースタイトル
            $table->text('content');  // ニュース本文
            $table->string('author')->nullable();  // 記者名（任意）
            $table->timestamp('published_at')->nullable();  // 公開日時
            $table->timestamps();  // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
