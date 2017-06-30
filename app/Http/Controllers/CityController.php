<?php

namespace App\Http\Controllers;

use App\City;

use App\Country;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Input;

class CityController extends Controller
{

    public function index()
    {
        $city = City::all();
        return view('/admin_city')->with('cities', $city);
    }

    public function selectCity(){
        $count_id = Input::get('count_id');
        $cities = City::where('country_id', '=', $count_id)->get();
        return Response::json($cities);
    }

    public function create(){

        $allcountries = Country::all();
        return view('admin_city')->with(['allcountries' => $allcountries]);
    }


    public function store(Request $request){
        //validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'country_id' => 'required|max:10',

        ));
        //store in the database
        $city = new City();

        $city->name = $request->name;
        $city->country_id = $request->country_id;
        $city->save();

        return redirect()->route('admin.city');
    }
}
