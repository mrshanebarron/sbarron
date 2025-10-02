<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hosting_plans', function (Blueprint $table) {
            $table->json('metadata')->nullable()->after('sort_order');
        });
    }

    public function down(): void
    {
        Schema::table('hosting_plans', function (Blueprint $table) {
            $table->dropColumn('metadata');
        });
    }
};
