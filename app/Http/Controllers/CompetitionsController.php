<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Area;
use App\Competition;
use App\Season;
use App\Round;

class CompetitionsController extends Controller
{
    public function index()
    {
       
        // $last_key = '7965261399874be28581dfafb7761b2a';

        // $competitions = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Competitions')->json();
        // // dd($competitions);

        // foreach($competitions as $comp){
        //     // dump($comp);
        // }

        $competitions = Competition::all();

        return view('competitions.index', [
            'competitions' => $competitions
        ]);
    }

    public function show($id)
    {
        $competition = Competition::find($id);
        $seasons = Season::where('CompetitionName', $competition['Name'])->get();
        // dd($seasons);

        return view('competitions.show', [
            'seasons' => $seasons,
            'competition' => $competition
        ]);
    }

    public function store()
    {
    	
        $last_key = '7965261399874be28581dfafb7761b2a';

        $competitions = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Competitions')->json();
        // dd($competitions);

        foreach($competitions as $comp){
            // dd($comp);
            $compid = $comp['CompetitionId'];
            $compareaid = $comp['AreaId'];
            $compname = $comp['Name'];
            $compgender = $comp['Gender'];
            $comptype = $comp['Type'];
            $compformat = $comp['Format'];
            $compkey = $comp['Key'];
            // dump($compid);

            $comp = new Competition([
                'CompetitionId' => $compid,
                'new_id' => $compareaid,
                'Name' => $compname,
                'Gender' => $compgender,
                'Type' => $comptype,
                'Format' => $compformat,
                'Key' => $compkey,
            ]);
            $comp->save(); 
        }
                    
        return view('competitions.store');
    }
}
