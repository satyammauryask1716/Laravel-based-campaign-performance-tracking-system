<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignRecordController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/campaign', [CampaignRecordController::class, 'index'])->name('campaign.index');
Route::get('/campaign/create', [CampaignRecordController::class, 'create'])->name('campaign.create');
Route::post('/campaign', [CampaignRecordController::class, 'store'])->name('campaign.store');
Route::get('/campaign/upload', [CampaignRecordController::class, 'uploadForm'])->name('campaign.uploadform');
Route::post('/campaign/upload', [CampaignRecordController::class, 'uploadExcel'])->name('campaign.uploaddata');
