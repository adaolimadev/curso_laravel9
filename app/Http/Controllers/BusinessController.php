<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    //
    public function index (){
        $allbusiness =  Business::paginate(10);
        // dd($allbusiness->toArray());
        return view('business', compact('allbusiness'));
    }

    public function store (Request $request){
        $inputs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'string',
            'logo'=>'file'
        ]);

        $file = $inputs['logo'];
        $path = $file->store('logos','public');
        
        $inputs['logo'] = $path;

        //dd($inputs);
        Business::create($inputs);
        

        return Redirect::route('business.index');

    }
}
