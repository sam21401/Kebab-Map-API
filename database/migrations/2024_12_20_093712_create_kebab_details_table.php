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
        Schema::create('kebab_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kebab_id')->constrained('kebab')->onDelete('cascade');
            $table->json('opening_hours');
            $table->json('meat_types')->nullable();
            $table->json('sauces')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_craft')->default(false);
            $table->boolean('is_in_stall')->default(false);
            $table->boolean('is_chain_member')->default(false);
            $table->json('ordering_options');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebab_details');
    }
};
