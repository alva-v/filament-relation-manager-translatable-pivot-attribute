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
        Schema::create('foos', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->timestamps();
        });

        Schema::create('bars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('bar_foo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bar_id')->constrained()->cascadeOnDelete();
            $table->foreignId('foo_id')->constrained()->cascadeOnDelete();
            $table->json('attribute')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bar_foo');
        Schema::dropIfExists('foos');
        Schema::dropIfExists('bars');
    }
};
