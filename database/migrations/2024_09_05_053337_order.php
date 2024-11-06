<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('order')) {
            Schema::create('order', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->date('date');
                $table->integer('price');
                $table->string('status');
                $table->unsignedBigInteger('user_id'); // Change to unsignedBigInteger for user_id
                $table->timestamps();

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
