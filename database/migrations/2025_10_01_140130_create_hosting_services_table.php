<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hosting_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('hosting_plan_id')->constrained()->cascadeOnDelete();
            $table->foreignId('domain_id')->nullable()->constrained()->nullOnDelete();
            $table->string('service_name'); // User-defined name for the service
            $table->string('status')->default('pending'); // pending, active, suspended, cancelled
            $table->string('server_ip')->nullable();
            $table->string('server_username')->nullable();
            $table->string('database_name')->nullable();
            $table->string('database_username')->nullable();
            $table->string('ftp_username')->nullable();
            $table->string('billing_cycle')->default('monthly'); // monthly, yearly
            $table->decimal('price', 10, 2);
            $table->date('next_billing_date')->nullable();
            $table->date('activated_at')->nullable();
            $table->date('expires_at')->nullable();
            $table->boolean('auto_renew')->default(true);
            $table->json('metadata')->nullable(); // Additional service config
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hosting_services');
    }
};
