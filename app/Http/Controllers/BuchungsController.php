<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use DB;
use Auth;

class BuchungsController extends Controller
{
	public function available(Request $request) {
		$validator = Validator::make($request->all(), [
            'boot' => 'required|in:0,1',
			'start' => 'required|date',
			'ende' => 'required|date',
        ]);
        if ($validator->fails()) {
            return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
        }	
		$results = DB::select('SELECT * FROM booking WHERE bootstyp = ? AND ((buchungsbeginn BETWEEN ? AND ?) OR (buchungsende BETWEEN ? AND ?))', [$request->boot, $request->start, $request->ende, $request->start, $request->ende]);
		if(empty($results)){
			return 'true';
		} else {
			return 'false';
		}
	}

	public function buchen(Request $request) {
		$validator = Validator::make($request->all(), [
            'boot' => 'required|in:0,1',
			'start' => 'required|date',
			'ende' => 'required|date',
			'szeit' => 'required|time',
			'ezeit' => 'required|time',
        ]);
		if(!Auth::guest()){
			DB::table('booking')->insert([
			'kundennr' => Auth::user()->id,
			'bootstyp' => $request->boot,
			'buchungsbeginn' => $request->start,
			'buchungsende' => $request->ende,
			'szeit' => $request->szeit,
			'ezeit' => $request->ezeit,
			'betrag' => 200.00,
		]);
		return 'true';
		} else {
			return 'false';
		}
	}
}