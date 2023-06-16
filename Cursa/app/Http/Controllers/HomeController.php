<?php

namespace App\Http\Controllers;


use App\Models\Race;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*   public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index(Request $request)
    {
        //Funcion para recoger la fecha actual
        $date = Carbon::now();
        $date = $date->format('Y-m-d');

        //Validamos que el sponsor este activo
        $sponsor = Sponsor::paginate()->where('active','=','1');

        //Pasamos los datos que cumplan la consulta
        $races = Race::where('date','>',$date)->where('active','=','1')->orderBy('date', 'desc')->get();
        $request->session()->put('key', 'value');
        return view('home', compact('races'))
            ->with('races',$races)
            ->with('diaActual',$date)
            ->with('sponsorImage',$sponsor);

    }

    public function homeAdmin()
    {
        return view('admin/home-admin');
    }
}
