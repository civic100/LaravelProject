<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use App\Models\Runner;
use Illuminate\Http\Request;

/**
 * Class PlacementController
 * @package App\Http\Controllers
 */
class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placements = Placement::paginate();

        return view('placement.index', compact('placements'))
            ->with('i', (request()->input('page', 1) - 1) * $placements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placement = new Placement();
        return view('placement.create', compact('placement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Placement::$rules);

        $placement = Placement::create($request->all());

        return redirect()->route('placements.index')
            ->with('success', 'Placement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $placement = Placement::find($id);

        return view('placement.show', compact('placement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $placement = Placement::find($id);

        return view('placement.edit', compact('placement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Placement $placement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Placement $placement)
    {
        request()->validate(Placement::$rules);

        $placement->update($request->all());

        return redirect()->route('placements.index')
            ->with('success', 'Placement updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $placement = Placement::find($id)->delete();

        return redirect()->route('placements.index')
            ->with('success', 'Placement deleted successfully');
    }

    /*RANKING*/
    public function ranking()
    {
        $ranking = Placement::join('runners','placements.runner_dni','runners.dni')->orderBy('placements.points','desc')->get();
        return view('placement.placementGlobal', compact('ranking'));
    }
}
