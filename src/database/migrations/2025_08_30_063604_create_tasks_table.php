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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();   //unsigned big int,primary key,auto increment
            $table->string('title', 24);
            $table->string('content', 255)->nullable();
            $table->unsignedBigInteger('genre_id')->nullable()->index();
            $table->unsignedBigInteger('owner_id')->index()->comment('タスク所有者ID');
            $table->string('rrule', 255)->nullable();
            $table->timestamp('start_at')->index();
            $table->timestamp('end_at')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
