<?php

namespace App\Http\Controllers;

use App\Models\RaceImage;
use Illuminate\Http\Request;

/**
 * Class RaceImageController
 * @package App\Http\Controllers
 */
class RaceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raceImages = RaceImage::paginate();

        return view('race-image.index', compact('raceImages'))
            ->with('i', (request()->input('page', 1) - 1) * $raceImages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raceImage = new RaceImage();
        return view('race-image.create', compact('raceImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RaceImage::$rules);

        $raceImage = RaceImage::create($request->all());

        return redirect()->route('race-images.index')
            ->with('success', 'RaceImage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raceImage = RaceImage::find($id);

        return view('race-image.show', compact('raceImage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raceImage = RaceImage::find($id);

        return view('race-image.edit', compact('raceImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RaceImage $raceImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaceImage $raceImage)
    {
        request()->validate(RaceImage::$rules);

        $raceImage->update($request->all());

        return redirect()->route('race-images.index')
            ->with('success', 'RaceImage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $raceImage = RaceImage::find($id)->delete();

        return redirect()->route('race-images.index')
            ->with('success', 'RaceImage deleted successfully');
    }

}
