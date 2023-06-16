<?php

namespace App\Http\Controllers;

use App\Models\RaceSponsor;
use Illuminate\Http\Request;

/**
 * Class RaceSponsorController
 * @package App\Http\Controllers
 */
class RaceSponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raceSponsors = RaceSponsor::paginate();

        return view('race-insurer.index', compact('raceSponsors'))
            ->with('i', (request()->input('page', 1) - 1) * $raceSponsors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raceSponsor = new RaceSponsor();
        return view('race-insurer.create', compact('raceSponsor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RaceSponsor::$rules);

        $raceSponsor = RaceSponsor::create($request->all());

        return redirect()->route('race-sponsors.index')
            ->with('success', 'RaceSponsor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raceSponsor = RaceSponsor::find($id);

        return view('race-sponsors.show', compact('raceSponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raceSponsor = RaceSponsor::find($id);

        return view('race-sponsors.edit', compact('raceSponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RaceSponsor $RaceSponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaceSponsor $raceSponsor)
    {
        request()->validate(RaceSponsor::$rules);

        $raceSponsor->update($request->all());

        return redirect()->route('race-sponsors.index')
            ->with('success', 'RaceSponsor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $raceSponsor = RaceSponsor::find($id)->delete();

        return redirect()->route('race-sponsors.index')
            ->with('success', 'RaceSponsor deleted successfully');
    }
}
