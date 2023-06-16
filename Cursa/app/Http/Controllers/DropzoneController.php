<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RaceImage;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {

        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */

     //Controller encargado de insertar las images del drop zone.
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName =$request->id.'_'.$image->getClientOriginalName();
        $image->move('/usr/home/biketour.com/web/images',$imageName);
        $imgRaceImage=RaceImage::create([ 'race_id'=>$request->id, 'race_image'=>$imageName]);

        return response()->json(['success'=>$imageName]);
    }
}

?>
