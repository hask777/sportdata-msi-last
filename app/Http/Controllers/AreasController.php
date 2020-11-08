<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Area;
use App\Competition;
use App\Season;
use App\Round;
use App\Team;

class AreasController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        // dd($areas[0]['Name']);
        return view('areas.index', ['areas' => $areas]);
    }

    public function show($id)
    {
        $area = Area::find($id);
        $competitions = Competition::where('new_id', $area['AreaId'])->get();
        $teams = Team::where('AreaId', $area['AreaId'])->get();
        // dd($teams);

        return view('areas.show', [
            'area' => $area,
            'competitions' => $competitions,
            'teams' => $teams
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $last_key = '7965261399874be28581dfafb7761b2a';

        $areas = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();
        // dd($areas);

        
        foreach($areas as $area){
            $areaId = $area['AreaId']; 
            $CountryCode = $area['CountryCode'];  
            $Name = $area['Name']; 
           
            $area = new Area([
                'AreaId' => $areaId,
                'CountryCode' => $CountryCode,
                'Name' => $Name,

            ]);

            $area->save();
   
        }
    }
}
