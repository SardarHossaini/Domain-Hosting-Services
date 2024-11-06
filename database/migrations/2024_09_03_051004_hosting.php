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
        if (!Schema::hasTable('hosting')) {
            Schema::create('hosting', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('label');
                $table->integer('web_space');
                $table->string('bandwidth');
                $table->string('sub_domain');
                $table->integer('email_id');
                $table->float('price');
                $table->integer('hosting_amount');
                $table->timestamps(); // This adds 'created_at' and 'updated_at' columns
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting');
    }
};