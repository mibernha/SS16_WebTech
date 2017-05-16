<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profilbearbeiten()
    {
        return view('registrieren');
    }

    public function speichern(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'straße' => 'required|string',
            'hausnr' => 'required|string|min:1|max:4',
            'plz' => 'required|min:4|max:5',
            'ort' => 'required|string',
            'land' => 'required|string',
            'geburtsdatum' => 'required|date',
            'persoid' => 'required|min:8|max:9',
        ]);
        if ($validator->fails()) {
            return redirect('/profil')
                        ->withErrors($validator)
                        ->withInput();
        }
        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update([ 
                'sex' => $request['sex'],
                'straße' => $request['straße'],
                'hausnr' => $request['hausnr'],
                'plz' => $request['plz'],
                'ort' => $request['ort'],
                'land' => $request['land'],
                'geburtsdatum' => $request['geburtsdatum'],
                'persoid' => $request['persoid'],
            ]);
        return redirect('/home');
    }

    public function zahlungsmethode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'whichone' => 'string|in:Visa,MasterCard',
            'inhaber' => 'string',
            'iban' => 'string|min:16|max:30',
            'bic' => 'string|min:8|max:13',
        ]);
        if ($validator->fails()) {
            return redirect('/profil')
                        ->withErrors($validator)
                        ->withInput();
        }
        if(DB::table('zahlungsmethode')->where('id', '=', Auth::user()->id)->count() > 0){
            DB::table('zahlungsmethode')
            ->where('id', Auth::user()->id)
            ->update([ 
                    'inhaber' => $request['inhaber'],
                    'iban' => $request['iban'],
                    'bic' => $request['bic'],
                    'gueltigkeit' => $request['gueltigkeit'],
                    'pruefziffer' => $request['pruefziffer'],
                    'typ' => $request['whichone'],
                    'nummer' => $request['knummer'],
            ]);
        } else {
            DB::table('zahlungsmethode')
            ->insert([ 
                    'id' => Auth::user()->id,
                    'iban' => $request['iban'],
                    'bic' => $request['bic'],
                    'inhaber' => $request['inhaber'],
                    'gueltigkeit' => $request['gueltig'],
                    'pruefziffer' => $request['pruef'],
                    'typ' => $request['whichone'],
                    'nummer' => $request['knummer'],
            ]);
        }
        return redirect('/home');

    }

    public function bssp(Request $request)
    {
        if($request->hasFile('bsspatent')){
            DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'patent' => $request['bsspatent'],
            ]);
        }
        return view('registrieren');
    }

    public function zipcode(Request $request)
    {
        $adressfile = fopen("postleitzahlen.txt", "r") or die("Unable to open file!");
        $searchstring = $request['plz'];
        if(strlen($searchstring)>1){
            while (($filestring = fgets($adressfile)) !== false) {
                if(substr( $filestring, 0, strlen($searchstring)) == $searchstring){
                    return substr($filestring, 5, strlen($filestring));
                }
            }
            fclose($adressfile);
        }
    }
}
