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
        Schema::create('template_ones', function (Blueprint $table) {
            $table->id();
            $table->string('template_name');
            $table->string('customer_name')->nullable();
            $table->string('customer_job')->nullable();
            $table->string('customer_business_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->date('email_date')->nullable();
            $table->string('customer_abbreviation')->nullable();
            $table->longText('email_description')->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_ones');
    }
};
