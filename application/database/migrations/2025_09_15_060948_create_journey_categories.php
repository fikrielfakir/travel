<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // This migration is used to seed Journey categories - see JourneySeeder
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Categories removed via seeder
    }
};
