<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RaceSponsor;
use App\Models\RacetrackRecord;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($response)
    {

        $separador = ",";
        $arreglo = explode($separador, $response);
   /*     dd($arreglo); */
        $data = [
            'arreglo' => $arreglo
        ];

        $pdf = PDF::loadView('pdf.myPDF', $data);

        return $pdf->download('InvoiceRace.pdf');
    }


    public function generatePDF2($request)
    {


        $sponsorPay = raceSponsor::select('sponsors.name','races.id','race_sponsors.sponsor_cif','races.race_price','sponsors.home')->join('races','races.id','race_sponsors.race_id')->join('sponsors','sponsors.cif','race_sponsors.sponsor_cif')->where('race_sponsors.sponsor_cif','=',$request)->get()->toArray();
        $total = 0;

        foreach($sponsorPay as $sponsor){
            $total =  $total+$sponsor['race_price'];
        }
        if($sponsorPay[0]['home']){ $total+ $total+120; }

        $data = [
            'sponsorPay' => $sponsorPay,
            'total' => $total
        ];

        $pdf = PDF::loadView('pdf.myPDF2', $data);

        return $pdf->download('InvoiceSponsor.pdf');
    }

    public function generatePDF3($response){

        $dorsal = RacetrackRecord::with('race')->select('dorsal','qr')->where('race_id','=',$response)->get()->toArray();


      

        $data = [
            'dorsal' => $dorsal,
    
        ];


        $pdf = PDF::loadView('pdf.myPDF3', $data);
        
        return $pdf->download('InvoiceSponsor.pdf');
    

    }

}
