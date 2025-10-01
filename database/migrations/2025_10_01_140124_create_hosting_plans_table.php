<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hosting_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Starter, Professional, Business, Enterprise
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('monthly_price', 10, 2);
            $table->decimal('yearly_price', 10, 2);
            $table->json('features'); // Storage, bandwidth, databases, SSL, etc.
            $table->integer('max_domains')->default(1);
            $table->integer('max_databases')->default(1);
            $table->string('storage_limit')->default('10GB'); // 10GB, 50GB, unlimited
            $table->string('bandwidth_limit')->default('100GB'); // 100GB, 500GB, unlimited
            $table->boolean('ssl_included')->default(true);
            $table->boolean('daily_backups')->default(false);
            $table->boolean('staging_environment')->default(false);
            $table->boolean('priority_support')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hosting_plans');
    }
};
