<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignRecord extends Model
{
    protected $fillable = [
        'region', 'platform', 'ad_type',
        'amount_planned', 'amount_achieved', 'amount_percent_achieved',
        'impressions_planned', 'impressions_achieved', 'impressions_percent_achieved',
        'reach_planned', 'reach_achieved', 'reach_percent_achieved',
        'platform_frequency_planned', 'platform_frequency_achieved',
        'views_planned', 'views_achieved', 'views_percent_achieved',
        'vtr_planned', 'vtr_achieved',
        'clicks_planned', 'clicks_achieved',
        'ctr_planned', 'ctr_achieved', 'cpc_planned', 'cpc_achieved',
        'overlap_percent', 'overlap_reach', 'overlap_frequency',
    ];
}
