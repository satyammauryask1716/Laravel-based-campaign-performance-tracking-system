<?php

namespace App\Imports;

use App\Models\CampaignRecord;
use Maatwebsite\Excel\Concerns\ToModel;

class CampaignRecordsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Skip header row
        if ($row[0] === 'Region') return null;

        return new CampaignRecord([
            'region' => $row[0],
            'platform' => $row[1],
            'ad_type' => $row[2],
            'amount_planned' => $row[3],
            'amount_achieved' => $row[4],
            'amount_percent_achieved' => $row[5],
            'impressions_planned' => $row[6],
            'impressions_achieved' => $row[7],
            'impressions_percent_achieved' => $row[8],
            'reach_planned' => $row[9],
            'reach_achieved' => $row[10],
            'reach_percent_achieved' => $row[11],
            'platform_frequency_planned' => $row[12],
            'platform_frequency_achieved' => $row[13],
            'views_planned' => $row[14],
            'views_achieved' => $row[15],
            'views_percent_achieved' => $row[16],
            'vtr_planned' => $row[17],
            'vtr_achieved' => $row[18],
            'clicks_planned' => $row[19],
            'clicks_achieved' => $row[20],
            'ctr_planned' => $row[21],
            'ctr_achieved' => $row[22],
            'cpc_planned' => $row[23],
            'cpc_achieved' => $row[24],
            'overlap_percent' => $row[25],
            'overlap_reach' => $row[26],
            'overlap_frequency' => $row[27],
        ]);
    }
}
