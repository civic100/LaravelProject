<?php

namespace App\Http\Controllers;

use App\Models\RaceInsurer;
use Illuminate\Http\Request;

/**
 * Class RaceInsurerController
 * @package App\Http\Controllers
 */
class RaceInsurerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raceInsurers = RaceInsurer::paginate();

        return view('race-insurer.index', compact('raceInsurers'))
            ->with('i', (request()->input('page', 1) - 1) * $raceInsurers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raceInsurer = new RaceInsurer();
        return view('race-insurer.create', compact('raceInsurer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RaceInsurer::$rules);

        $raceInsurer = RaceInsurer::create($request->all());

        return redirect()->route('race-insurers.index')
            ->with('success', 'RaceInsurer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raceInsurer = RaceInsurer::find($id);

        return view('race-insurer.show', compact('raceInsurer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raceInsurer = RaceInsurer::find($id);

        return view('race-insurer.edit', compact('raceInsurer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RaceInsurer $raceInsurer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaceInsurer $raceInsurer)
    {
        request()->validate(RaceInsurer::$rules);

        $raceInsurer->update($request->all());

        return redirect()->route('race-insurers.index')
            ->with('success', 'RaceInsurer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $raceInsurer = RaceInsurer::find($id)->delete();

        return redirect()->route('race-insurers.index')
            ->with('success', 'RaceInsurer deleted successfully');
    }
}
