<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CityModel;
use Illuminate\Http\Request;
use App\Models\CountryModel;
use App\Models\StateModel;

class CountryStateCityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getCountries() {

        $countries = CountryModel::all();

        return response()->json($countries);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getStates(Request $request) {

        $states = StateModel::where('country_id', $request->country_id)->get();

        return response()->json($states);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getCities(Request $request) {

        $cities = CityModel::where('state_id', $request->state_id)->get();

        return response()->json($cities);
    }

    public function getCitiesList(Request $request) {

        $cities = CityModel::take(50)->get();

        return response()->json($cities);
    }
}
