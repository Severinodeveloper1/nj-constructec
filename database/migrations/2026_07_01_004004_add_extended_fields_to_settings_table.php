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
        Schema::table('settings', function (Blueprint $table) {
            $table->longText('about_history')->nullable();
            $table->text('about_mission')->nullable();
            $table->text('about_vision')->nullable();
            $table->json('about_values')->nullable();
            $table->string('brochure_path')->nullable();
            $table->string('contact_email_receiver')->nullable(); // receiver of contact/claims emails
            $table->string('pilar_1_title')->nullable();
            $table->text('pilar_1_desc')->nullable();
            $table->string('pilar_2_title')->nullable();
            $table->text('pilar_2_desc')->nullable();
            $table->string('pilar_3_title')->nullable();
            $table->text('pilar_3_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'about_history',
                'about_mission',
                'about_vision',
                'about_values',
                'brochure_path',
                'contact_email_receiver',
                'pilar_1_title',
                'pilar_1_desc',
                'pilar_2_title',
                'pilar_2_desc',
                'pilar_3_title',
                'pilar_3_desc',
            ]);
        });
    }
};
