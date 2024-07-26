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
            $table->foreignId('user_id')->constrained('users');
            $table->string('photo')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->dateTime('birthday');
            $table->string('gender');
            $table->text('bio')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('organization_id')->constrained('organizations')->onDelete('cascade')->nullable();
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade')->nullable();
            $table->foreignId('language_id')->constrained('languages')->onDelete('cascade')->nullable();
            $table->foreignId('currency_id')->constrained('currencies')->onDelete('cascade')->nullable();
            $table->enum('status', ['active', 'inactive', 'unallowed', 'blocked'])->default('active');
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
