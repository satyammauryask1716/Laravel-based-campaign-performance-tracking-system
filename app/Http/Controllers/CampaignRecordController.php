<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampaignRecord;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CampaignRecordsImport;

class CampaignRecordController extends Controller
{
    public function index()
    {
        $records = CampaignRecord::paginate(20);
        return view('campaign.index', compact('records'));
    }

    public function create()
    {
        return view('campaign.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'region' => 'nullable|string',
            'platform' => 'required|string',
            'ad_type' => 'required|string',
            'amount_planned' => 'nullable|numeric',
            'amount_achieved' => 'nullable|numeric',
            // Validate other numeric fields similarly
        ]);

        CampaignRecord::create($data);
        return redirect()->route('campaign.index')->with('success', 'Record added successfully');
    }

    public function uploadForm()
    {
        return view('campaign.upload');
    }

    public function uploadExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xls,xlsx'
        ]);

        Excel::import(new CampaignRecordsImport, $request->file('file'));

        return redirect()->route('campaign.index')->with('success', 'Excel file imported successfully!');
    }
}
