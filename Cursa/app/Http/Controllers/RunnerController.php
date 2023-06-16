<?php

namespace App\Http\Controllers;

use App\Models\Runner;
use Illuminate\Http\Request;
use App\Models\Race;

/**
 * Class RunnerController
 * @package App\Http\Controllers
 */
class RunnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runners = Runner::paginate();

        return view('runner.index', compact('runners'))
            ->with('i', (request()->input('page', 1) - 1) * $runners->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $runner = new Runner();
        return view('runner.create', compact('runner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Runner::$rules);

        $runner = Runner::create($request->all());

        return redirect()->route('runners.index')
            ->with('success', 'Runner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $runner = Runner::find($id);

        return view('runner.show', compact('runner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $runner = Runner::find($id);

        return view('runner.edit', compact('runner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Runner $runner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Runner $runner)
    {
        request()->validate(Runner::$rules);

        $runner->update($request->all());

        return redirect()->route('runners.index')
            ->with('success', 'Runner updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $runner = Runner::find($id)->delete();

        return redirect()->route('runners.index')
            ->with('success', 'Runner deleted successfully');
    }

}
