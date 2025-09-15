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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->boolean('is_default')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
        
        // Insert default languages for Morocco
        DB::table('languages')->insert([
            ['name' => 'English', 'code' => 'en', 'is_default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Français', 'code' => 'fr', 'is_default' => 0, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'العربية', 'code' => 'ar', 'is_default' => 0, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
