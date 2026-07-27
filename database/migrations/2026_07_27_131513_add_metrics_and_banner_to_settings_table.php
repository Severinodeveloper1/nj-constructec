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
            $table->string('about_banner_path')->nullable();
            $table->string('about_banner_badge')->nullable();
            $table->string('about_banner_title')->nullable();
            $table->string('about_metric_1_value')->nullable();
            $table->string('about_metric_1_label')->nullable();
            $table->string('about_metric_2_value')->nullable();
            $table->string('about_metric_2_label')->nullable();
            $table->string('about_metric_3_value')->nullable();
            $table->string('about_metric_3_label')->nullable();
            $table->string('about_metric_4_value')->nullable();
            $table->string('about_metric_4_label')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'about_banner_path',
                'about_banner_badge',
                'about_banner_title',
                'about_metric_1_value',
                'about_metric_1_label',
                'about_metric_2_value',
                'about_metric_2_label',
                'about_metric_3_value',
                'about_metric_3_label',
                'about_metric_4_value',
                'about_metric_4_label',
            ]);
        });
    }
};
