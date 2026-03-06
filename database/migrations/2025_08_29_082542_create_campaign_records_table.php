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
        Schema::create('campaign_records', function (Blueprint $table) {
            $table->id();
            $table->string('region')->nullable();
            $table->string('platform');
            $table->string('ad_type');

            // Amount
            $table->decimal('amount_planned', 15, 2)->nullable();
            $table->decimal('amount_achieved', 15, 2)->nullable();
            $table->decimal('amount_percent_achieved', 5, 2)->nullable();

            // Impressions
            $table->bigInteger('impressions_planned')->nullable();
            $table->bigInteger('impressions_achieved')->nullable();
            $table->decimal('impressions_percent_achieved', 5, 2)->nullable();

            // Reach
            $table->bigInteger('reach_planned')->nullable();
            $table->bigInteger('reach_achieved')->nullable();
            $table->decimal('reach_percent_achieved', 5, 2)->nullable();

            // Platform Frequency
            $table->decimal('platform_frequency_planned', 5, 2)->nullable();
            $table->decimal('platform_frequency_achieved', 5, 2)->nullable();

            // Views
            $table->bigInteger('views_planned')->nullable();
            $table->bigInteger('views_achieved')->nullable();
            $table->decimal('views_percent_achieved', 5, 2)->nullable();

            // VTR
            $table->decimal('vtr_planned', 5, 2)->nullable();
            $table->decimal('vtr_achieved', 5, 2)->nullable();

            // Clicks
            $table->bigInteger('clicks_planned')->nullable();
            $table->bigInteger('clicks_achieved')->nullable();

            // CTR, CPC
            $table->decimal('ctr_planned', 5, 2)->nullable();
            $table->decimal('ctr_achieved', 5, 2)->nullable();
            $table->decimal('cpc_planned', 10, 2)->nullable();
            $table->decimal('cpc_achieved', 10, 2)->nullable();

            // Overlap
            $table->decimal('overlap_percent', 5, 2)->nullable();
            $table->bigInteger('overlap_reach')->nullable();
            $table->decimal('overlap_frequency', 5, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_records');
    }
};
