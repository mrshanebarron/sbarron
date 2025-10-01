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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->string('domain_name')->unique();
            $table->string('tld'); // .com, .net, .io, etc
            $table->string('status')->default('pending'); // pending, active, expired, cancelled, transferred
            $table->string('namecom_domain_id')->nullable();
            $table->decimal('purchase_price', 10, 2);
            $table->decimal('renewal_price', 10, 2);
            $table->date('registered_at')->nullable();
            $table->date('expires_at')->nullable();
            $table->boolean('auto_renew')->default(true);
            $table->boolean('privacy_enabled')->default(true);
            $table->boolean('locked')->default(true);
            $table->json('nameservers')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('status');
            $table->index('expires_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
