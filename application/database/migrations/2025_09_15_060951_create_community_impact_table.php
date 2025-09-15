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
        Schema::create('community_impact', function (Blueprint $table) {
            $table->id();
            $table->string('metric_name'); // e.g., 'participants', 'trees_planted', 'cultural_collaborations'
            $table->string('display_name'); // e.g., 'Participants', 'Trees Planted'
            $table->integer('count')->default(0);
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->unique('metric_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_impact');
    }
};
