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
        Schema::create('dns_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->constrained()->cascadeOnDelete();
            $table->string('namecom_record_id')->nullable();
            $table->string('type'); // A, AAAA, CNAME, MX, TXT, NS, SRV, etc
            $table->string('host'); // subdomain or @ for root
            $table->text('answer'); // IP address, hostname, or text value
            $table->integer('ttl')->default(300); // Time to live in seconds
            $table->integer('priority')->nullable(); // For MX and SRV records
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index('type');
            $table->index(['domain_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dns_records');
    }
};
