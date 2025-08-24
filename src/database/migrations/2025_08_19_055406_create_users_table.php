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
            $table->id(); // unsigned big int, PK, auto increment
            $table->string('name', 24);
            $table->string('email', 255)->unique();
            $table->char('password', 60);
            $table->char('friend_code', 32);
            $table->unsignedTinyInteger('role')->default(0)
                ->comment('ユーザーの役割 0: user 1: administrator');
            $table->rememberToken(); // varchar(100), nullable
            $table->timestamps(); // created_at, updated_at
            $table->softDeletes(); //deleted_at
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
