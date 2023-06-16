<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;
use App\Models\RacetrackRecord;
use App\Models\Runner;
use App\Models\RaceSponsor;
use App\Models\Sponsor;
use App\Models\RaceImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
/**
 * Class RaceController
 * @package App\Http\Controllers
 */
class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $races = Race::paginate();
        $request->session()->put('key', 'value');
        return view('race.index', compact('races'))
            ->with('i', (request()->input('page', 1) - 1) * $races->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $race = new Race();
        return view('race.create', compact('race'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Race::$rules);

        $input = $request->all();

        if ($image = $request->file('maps_image')) {
            $destinationPath = 'mapsImages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['maps_image'] = "$profileImage";
        }

        if ($image = $request->file('promotional_poster')) {
            $destinationPath = 'promotionalPosters/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['promotional_poster'] = "$profileImage";
        }
        $race = Race::create($input);

        return redirect()->route('races.index')
            ->with('success', 'Race created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Carbon::now();
        $dateDais = $date->format('Y-m-d');
        $race = Race::find($id);
        $runners = RacetrackRecord::with('race')->where('race_id','=',$id)->get();
        return view('race.show', compact('runners','id','dateDais','race'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        return view('race.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Race $race
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Race $race)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
		    'ramp' => 'required',
		    'max_participants' => 'required',
            'race_price' => 'required',
		    'km' => 'required',
		    'date' => 'required',
		    'hour' => 'required',
		    'starting_point' => 'required',
		    'sponsor_price' => 'required'
        ]);

        $race->update($request->all());

        return redirect()->route('races.index')
            ->with('success', 'Race updated successfully');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        if(Race::find($id)->active == "0"){
            $race = Race::find($id)->update(['active' => "1"]);
        }else{
            $race = Race::find($id)->update(['active' => "0"]);
        }
        //$race = Race::find($id)->delete();
        return redirect()->route('races.index')
            ->with('success', 'Race status edit successfully');
    }

    public function runnerForm(Request $request){
        $race = Race::with('raceInsurer')->where('id','=',$request->id)->get();
        return view('race.runnerForm', compact('race'));
    }

    public function racePage(Request $request)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $race = Race::find($request->id);
        $raceImage = raceImage::with('race')->where('race_id','=',$request->id)->get();
        $sponsorImage = Sponsor::join('race_sponsors','sponsors.cif','race_sponsors.sponsor_cif')->where('race_sponsors.race_id','=',$request->id)->where('active','=','1')->get()->toArray();
        $ranking['general'] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->orderBy('racetrack_records.time','asc')->get();
        $ranking['male'] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->where('runners.sex','male')->orderBy('racetrack_records.time','asc')->get();
        $ranking['female'] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->where('runners.sex','female')->orderBy('racetrack_records.time','asc')->get();
        $ranking['master'][20] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->whereBetween('runners.birth_date', [date('Y-m-d',strtotime ('-20 year' , strtotime($date))), $date])->orderBy('racetrack_records.time','asc')->get()->toArray();
        $ranking['master'][30] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->whereBetween('runners.birth_date', [date('Y-m-d',strtotime ('-30 year' , strtotime($date))), date('Y-m-d',strtotime ('-20 year' , strtotime($date)))])->orderBy('racetrack_records.time','asc')->get()->toArray();
        $ranking['master'][40] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->whereBetween('runners.birth_date', [date('Y-m-d',strtotime ('-40 year' , strtotime($date))), date('Y-m-d',strtotime ('-30 year' , strtotime($date)))])->orderBy('racetrack_records.time','asc')->get()->toArray();
        $ranking['master'][50] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->whereBetween('runners.birth_date', [date('Y-m-d',strtotime ('-50 year' , strtotime($date))), date('Y-m-d',strtotime ('-40 year' , strtotime($date)))])->orderBy('racetrack_records.time','asc')->get()->toArray();
        $ranking['master'][60] = RacetrackRecord::join('runners','racetrack_records.runner_dni','runners.dni')->where('racetrack_records.race_id','=',$request->id)->whereBetween('runners.birth_date', [date('Y-m-d',strtotime ('-60 year' , strtotime($date))), date('Y-m-d',strtotime ('-50 year' , strtotime($date)))])->orderBy('racetrack_records.time','asc')->get()->toArray();
        return view('race.racePage', compact('race','sponsorImage','raceImage','date','ranking'));
    }

    public function allRace(Request $request)
    {

        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $races = Race::paginate();
        $request->session()->put('key', 'value');
        return view('race.allRaces', compact('races'))
            ->with('i', (request()->input('page', 1) - 1) * $races->perPage())
            ->with('diaActual',$date);

    }
    public function finishedRaces(Request $request)
    {

        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $races = Race::paginate();
        $request->session()->put('key', 'value');
        return view('race.finishedRaces', compact('races'))
            ->with('i', (request()->input('page', 1) - 1) * $races->perPage())
            ->with('diaActual',$date);

    }

    public function racesToStart(Request $request)
    {

        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $races = Race::paginate();
        $request->session()->put('key', 'value');
        return view('race.racesToStart', compact('races'))
            ->with('i', (request()->input('page', 1) - 1) * $races->perPage())
            ->with('diaActual',$date);

    }



    public function raceSearch(Request $request)
    {
        $busqueda = $request->race;
        $races = Race::where('name','LIKE','%'.$request->race.'%')->get();
        return view('race.search', compact('races','busqueda'));
    }

    public function gallery()
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $races = Race::with('raceimage')->where('date','<',$date)->orderBy('date', 'desc')->get();
        //dd(intval(ceil(count($races[2]['raceimage'])/3)));
        return view('race.gallery', compact('races'));
    }

}
