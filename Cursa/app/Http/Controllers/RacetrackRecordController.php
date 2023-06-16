<?php

namespace App\Http\Controllers;
use App\Models\RacetrackRecord;
use App\Models\Placement;
use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Runner;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;


/**
 * Class RacetrackRecordController
 * @package App\Http\Controllers
 */
class RacetrackRecordController extends Controller
{
    public function runnerForm(Request $request)
    {

        $response=($request->session()->get('response'));

        if(Race::find($request->id)){
            $race = Race::with('raceInsurer')->where('id','=',$request->id)->get();
            $countRunners = RacetrackRecord::select('*')->where('race_id','=',$request->id)->count();
            if($countRunners < $race[0]->max_participants){
                $dorsal = $countRunners + 1;
                $id = $request->id;
                $race_price = $race[0]->race_price;
                $lleno = false;
            }else{
                $dorsal = NULL;
                $id = NULL;
                $race_price = NULL;
                $lleno = true;
            }
            $runner = new Runner();
            return view('race.runnerForm', compact('race','dorsal','id','runner','race_price','lleno','response'));
        }else{
            return redirect('http://www.biketour.com.mialias.net');
        }
    }
  
    public function checkRunnerForm(Request $request){

        if(Runner::find($request->runner_dni)){
            if(RacetrackRecord::select('*')->where('runner_dni','=',$request->runner_dni)->where('race_id','=',$request->race_id)->count() > 0){
                return redirect()
                    ->back()
                    ->with('error', 'You are already registered as a runner.');
            }else{
                if(isset($request->insurer_cif)){
                    $request->session()->put('array', $request->all());
                    return view('paypal.index', ['amount' => $request->amount]);

                }else{
                    $runner = Runner::find($request->runner_dni);

                    if($runner->federation == 1){
                        $request->session()->put('array', $request->all());
                        return view('paypal.index', ['amount' => $request->amount]);
                    }else{
                        return redirect()
                            ->back()
                            ->with('error', 'You are not registered as a federated runner.');
                    }
                }
            }
        }else{
            return redirect()
                ->back()
                ->with('error', 'You are not registered as a runner.');
        }
    }

    public function storeRunnerForm(Request $request){

        $runner = $request->session()->all()['array'];
        if(isset($runner['insurer_cif'])){
            $insurer = explode(",",$runner['insurer_cif']);
            $runner['insurer_cif'] = $insurer[0];

        }else{
            $runner['insurer_cif'] = NULL;
        }
        $name = $runner['runner_dni'].'_'.$runner['race_id'].'_qr.svg';
        QrCode::generate('http://www.biketour.com.mialias.net/racetrack-record/'.$runner['race_id'].'/'.$runner['runner_dni'], 'qrcodes/'.$name);
        $runner['qr'] = $name;
        RacetrackRecord::create($runner);
        $request->session()->forget('array');

        return redirect('http://www.biketour.com.mialias.net/runnerForm/'.$runner['race_id'])
                ->with('success', $response['message'] ?? 'Transaction approved.')
                ->with('response', $request->session()->get('response'));
    }

    public function checkRunnerRegister(Request $request){
        request()->validate(Runner::$rules);
        if(!(Runner::find($request->dni))){
            $request->session()->put('array', $request->all());
            return view('paypal.index', ['amount' => $request->amount]);
        }else{
            return redirect()
                ->back()
                ->with('error', 'Ya estas registrado en nuestro sistema.');
        }
    }

    public function storeRunnerRegister(Request $request){

        $runner = $request->session()->all()['array'];
        if($runner['federation'] == 1){
            $runner['insurer_cif'] = NULL;
        }else{
            $insurer = explode(",",$runner['insurer_cif']);
            $runner['insurer_cif'] = $insurer[0];
        }
        Runner::create($runner);
        $name = $runner['dni'].'_'.$runner['race_id'].'_qr.svg';
        QrCode::generate('http://www.biketour.com.mialias.net/racetrackRecord/'.$runner['race_id'].'/'.$runner['dni'], 'qrcodes/'.$name);
        $runner['qr'] = $name;
        $runner['runner_dni'] = $runner['dni'];
        RacetrackRecord::create($runner);
        $request->session()->forget('array');

 
        return redirect('http://www.biketour.com.mialias.net/runnerForm/'.$runner['race_id'])
            ->with('success', $response['message'] ?? 'Transaction approved.')
            ->with('response', $request->session()->get('response'));
    }


    public function racetrackRecord(Request $request){
        $arrayPoitns = [1000, 900, 800, 700, 600, 500, 400, 300, 200, 100];
        
        $race = Race::find($request->id);
        $date = Carbon::now();
        $dateDais = $date->format('Y-m-d');
        $date->addHours();
        $dateHours = $date->format('H:i:s');

        if( $race->date == $dateDais && $race->hour < $dateHours ){

            $count = RacetrackRecord::where('race_id','=',$request->id)->where('points','!=',NULL)->count();
            $racetrackRecord = RacetrackRecord::where('race_id','=',$request->id)->where('runner_dni','=',$request->dni)->update(['points' => ((isset($arrayPoitns[$count+1])) ? $arrayPoitns[$count+1] : 0), 'time' => $date->diff($race->hour)->format('%H:%I:%S')]);
            $placementsPoints= Placement::select('points')->firstwhere('runner_dni','=',$request->dni);
            $placements= Placement::where('runner_dni','=',$request->dni)->update(['points' =>  $placementsPoints->points+(((isset($arrayPoitns[$count+1])) ? $arrayPoitns[$count+1] : 0)) ]);

        }else{
            dd('Out of date range');
        }

   }
}
