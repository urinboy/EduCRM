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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->string('photo')->nullable();
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('middle_name')->nullable();
            // $table->string('organization')->nullable();
            // $table->string('phone')->nullable();
            // $table->foreignId('country_id')->constrained()->onDelete('cascade')->nullable();
            // $table->foreignId('state_id')->constrained()->onDelete('cascade')->nullable();
            // $table->foreignId('city_id')->constrained()->onDelete('cascade')->nullable();
            // $table->text('address')->nullable();
            // $table->string('zip_code')->nullable();
            // $table->foreignId('language_id')->constrained()->onDelete('cascade')->nullable();
            // $table->string('currency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
