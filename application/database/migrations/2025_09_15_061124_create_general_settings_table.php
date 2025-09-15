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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('The Journey');
            $table->string('cur_text')->default('MAD');
            $table->string('cur_sym')->default('DH');
            $table->string('active_template')->default('default');
            $table->boolean('force_ssl')->default(false);
            $table->json('mail_config')->nullable();
            $table->json('sms_config')->nullable();
            $table->json('global_shortcodes')->nullable();
            $table->json('socialite_credentials')->nullable();
            $table->json('agency_socialite_credentials')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
