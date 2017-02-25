<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use Validator;
use App\Deals;
use Carbon\Carbon; 

use App\User;

class DealsController extends Controller
{

	public function __construct()
    {
        //$this->middleware('auth');
    }

    public function all() {

    	$flights = Deals::all();

		foreach ($flights as $flight) {
		    echo $flight->detail;
		}
    }

    public function add() {
    	if(Auth::user()->isadmin)
    		return view('deals.dealadd');
    	else
    		return redirect('/');;
    }

    public function validadd(Request $request) {

    	$validator = Validator::make($request->all(), [
            'heading' => 'required|unique:deals|max:255',
        	'vendor' => 'required|max:255',
        	'link' => 'required|unique:deals'
            ]);
       if ($validator->fails()) {
             return response()->json([
                'error' => true,
                'message' => 'Invalid Parameter!',
                'status' => '400'
            ]);
        }
        else{
        	$deals = new Deals;

        	$deals->heading = $request->heading;
        	$deals->vendor = $request->vendor;
        	$deals->actual_cost = $request->actual_cost;
        	$deals->current_cost = $request->current_cost;
        	$deals->link = $request->link;
        	$deals->detail = $request->detail;
        	$deals->user_id = Auth::id();

        	if($request->hasFile('image')) {
     
            $file = Input::file('image');
            //getting timestamp
            
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();
            
            $deals->image = '/images/deal/'.$name;

            $file->move(public_path().'/images/deal/', $name);
        }

        	$deals->save();

        }

        return redirect('/');
    }
}
