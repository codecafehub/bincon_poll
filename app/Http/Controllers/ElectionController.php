<?php

namespace App\Http\Controllers;

use App\Models\LGA;
use Illuminate\View\View;
use App\Models\PollingUnit;
use Illuminate\Http\Request;
use App\Models\AnnouncedPuResult;

class ElectionController extends Controller
{
    public function pollingUnits(): View
    {
        $data = [
            'title' => 'All units',
            'pollingUnits' => PollingUnit::all(),
        ];

        return view('pages.polling-units', $data);
    }

    public function pollingUnitsResults(Request $request, $uniqueid): View
    {
        $uid = base64_decode($uniqueid);

        $unit = PollingUnit::find($uid);

        if (!$unit) {
            abort(404, 'Polling Unit not found');
        }

        $data = [
            'title' => "Polling Unit {$unit->polling_unit_id} Results",
            'unit' => $unit,
            'unitResults' => AnnouncedPuResult::where('polling_unit_uniqueid', $uid)->get(),
        ];

        return view('pages.unit-results', $data);
    }
    
    public function lga():View
    {
        $data = [
            'title' => 'All | LGA',
            'lgaUnit' => LGA::all(),
        ];

        return view('pages.lga')->with($data);
    }

    public function lgaResult($uniqueid):View
    {
        $lgaid = base64_decode($uniqueid);
        $lga = LGA::find($lgaid);
        if(!$lgaid){
            abort(404, 'LGA was not found');
        }

        $data = [
            'title' => "Polling Unit Results for LGA: {$lga->name}",
            'lga' => $lga,
            'units' => PollingUnit::where('lga_id', $lga->id)->get(),
            'unitResults' => AnnouncedPuResult::whereIn('polling_unit_uniqueid', function ($query) use ($lga) {
                $query->select('uniqueid')
                      ->from('polling_units')
                      ->where('lga_id', $lga->id);
            })->get(),  
        ];  
        
        return view('pages.lga-results')->with($data);
    }

    public function addPollResult():View
    {
        $data = [];
        $data['title'] ="Add|Poll Result";

        return view('pages.add-poll-result')->with($data);
    }

    public function store(Request $request)
    {
        $uniqueCode = 8;
        $ip = $request->ip();
        $request->validate([
            'party_id' => 'required|exists:parties,id', 
            'party_score' => 'required|numeric',
            'entered_by_user' => 'required|string',
            'date_entered' => 'required|date',
        ]);

        AnnouncedPuResult::create([
            'polling_unit_uniqueid' => $uniqueCode,
            'party_abbreviation' => $request->input('party_id'),
            'party_score' => $request->input('party_score'),
            'entered_by_user' => $request->input('entered_by_user'),
            'date_entered' => $request->input('date_entered'),
            'user_ip_address' => $ip,
        ]);
        return back();
    }

}
