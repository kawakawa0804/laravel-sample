<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();                          // BIGINT UNSIGNED AUTO_INCREMENT
            $table->unsignedBigInteger('user_id'); // BIGINT UNSIGNED
            $table->string('name', 255);           // VARCHAR(255)
            $table->text('contents');              // TEXT
            // $table->timestamps();               // 課題に不要なら入れない
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
