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
        Schema::create('room_members', function (Blueprint $table) {
            $table->increments('id_room_members');

            $table->unsignedInteger('id_rooms');
            $table->unsignedInteger('id_user');

            $table->enum('role', ['admin', 'member'])->default('member');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_rooms')
                ->references('id_rooms')
                ->on('rooms')
                ->onDelete('cascade');

            $table->foreign('id_user')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_members');
    }
};
