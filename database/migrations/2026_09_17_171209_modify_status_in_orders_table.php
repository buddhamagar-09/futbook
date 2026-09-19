<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Change existing shipped/pending orders to processing
        DB::table('orders')
            ->whereIn('status', ['pending', 'shipped'])
            ->update(['status' => 'processing']);

        Schema::table('orders', function (Blueprint $table) {
            $table->enum('status', [
                'processing',
                'delivered',
                'cancelled'
            ])->default('processing')->change();
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->enum('status', [
                'pending',
                'processing',
                'shipped',
                'delivered',
                'cancelled'
            ])->default('pending')->change();
        });
    }
};