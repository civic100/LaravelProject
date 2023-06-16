<?php

namespace App\Http\Controllers;

use App\Models\Insurer;
use App\Models\RaceInsurer;
use App\Models\Race;
use Illuminate\Http\Request;

/**
 * Class InsurerController
 * @package App\Http\Controllers
 */
class InsurerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $insurers = Insurer::paginate();
        $request->session()->put('key', 'value');
        return view('insurer.index', compact('insurers'))
            ->with('i', (request()->input('page', 1) - 1) * $insurers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurer = new Insurer();
        $races = Race::all();
        return view('insurer.create', compact('insurer','races'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Insurer::$rules);
        $insurer = Insurer::create($request->all());
        if(isset($request->race)){
            foreach ($request->race as $key => $value) {
                $input['race_id'] = $key;
                $input['insurer_cif'] = $request->cif;
                $input['price'] = $value[1];
                RaceInsurer::create($input);
            }
        }
        return redirect()->route('insurers.index')
            ->with('success', 'Insurer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(RaceInsurer::select('*')->where('insurer_cif','=',$id)->count() > 0){
            $insurer = RaceInsurer::with('insurer')->with('race')->where('insurer_cif','=',$id)->get();
        }else{
            $insurer = Insurer::find($id);
        }
        return view('insurer.show', compact('insurer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insurer = Insurer::find($id);

        //RACES WHERE ISN'T INSURER
        $racesN = RaceInsurer::select('race_id')->where('insurer_cif','!=',''.$id.'')->get();
        //RACES WHERE IS INSURERS
        $racesY = RaceInsurer::where('insurer_cif','=',''.$id.'')->get();
        $races = [];
        foreach($racesY as $id){
            $races[] = $id->race_id;
        }
        $allRaces = Race::whereNotIn('id',$races)->get();

        return view('insurer.edit', compact('insurer','racesY','racesN','allRaces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Insurer $insurer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurer $insurer)
    {
        request()->validate(Insurer::$rules);
        $insurer->update($request->all());
        RaceInsurer::where('insurer_cif',$request->cif)->delete();
        if(isset($request->race)){
            foreach ($request->race as $key => $value) {
                $input['race_id'] = $key;
                $input['insurer_cif'] = $request->cif;
                $input['price'] = $value[1];
                RaceInsurer::updateOrCreate($input);
            }
        }
        return redirect()->route('insurers.index')
            ->with('success', 'Insurer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        if(Insurer::find($id)->active == "0"){
            $insurer = Insurer::find($id)->update(['active' => "1"]);
        }else{
            $insurer = Insurer::find($id)->update(['active' => "0"]);
        }
        // $insurer = Insurer::find($id)->delete();

        return redirect()->route('insurers.index')
            ->with('success', 'Insurer deleted successfully');
    }
}
