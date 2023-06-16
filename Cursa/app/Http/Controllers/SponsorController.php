<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\RaceSponsor;

/**
 * Class SponsorController
 * @package App\Http\Controllers
 */
class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sponsors = Sponsor::paginate();
        $request->session()->put('key', 'value');
        return view('sponsor.index', compact('sponsors'))
            ->with('i', (request()->input('page', 1) - 1) * $sponsors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sponsor = new Sponsor();
        $races = Race::all();
        return view('sponsor.create', compact('sponsor','races'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Sponsor::$rules);
        $input = $request->all();
        if ($image = $request->file('logo')) {
            $destinationPath = 'logoImages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }
        $sponsor = Sponsor::create($input);
        if(isset($request->race)){
            foreach ($request->race as $key => $value) {
                $input2['race_id'] = $key;
                $input2['sponsor_cif'] = $request->cif;
                RaceSponsor::create($input2);
            }
        }
        return redirect()->route('sponsors.index')
            ->with('success', 'Sponsor created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(RaceSponsor::select('*')->where('sponsor_cif','=',$id)->count() > 0){
            $sponsor = RaceSponsor::with('sponsor')->with('race')->where('sponsor_cif','=',$id)->get();
        }else{
            $sponsor = Sponsor::find($id);
        }

        return view('sponsor.show', compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = Sponsor::find($id);

        //RACES WHERE ISN'T INSURER
        $racesN = RaceSponsor::select('race_id')->where('sponsor_cif','!=',''.$id.'')->get();
        //RACES WHERE IS INSURERS
        $racesY = RaceSponsor::where('sponsor_cif','=',''.$id.'')->get();
        $races = [];
        foreach($racesY as $id){
            $races[] = $id->race_id;
        }
        $allRaces = Race::whereNotIn('id',$races)->get();
        return view('sponsor.edit', compact('sponsor','racesY','racesN','allRaces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sponsor $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        //dd($request->all());
        request()->validate([
            'cif' => 'required',
		    'name' => 'required',
		    'address' => 'required',
		    'email' => 'required',
		    'home' => 'required'
        ]);
        //request()->validate(Sponsor::$rules);

        $sponsor->update($request->all());
        RaceSponsor::where('sponsor_cif',$request->cif)->delete();
        if(isset($request->race)){
            foreach ($request->race as $key => $value) {
                $input2['race_id'] = $key;
                $input2['sponsor_cif'] = $request->cif;
                RaceSponsor::create($input2);
            }
        }
        return redirect()->route('sponsors.index')
            ->with('success', 'Sponsor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        if(Sponsor::find($id)->active == "0"){
            $sponsor = Sponsor::find($id)->update(['active' => "1"]);
        }else{
            $sponsor = Sponsor::find($id)->update(['active' => "0"]);
        }

        return redirect()->route('sponsors.index')
            ->with('success', 'Sponsor deleted successfully');
    }
}
