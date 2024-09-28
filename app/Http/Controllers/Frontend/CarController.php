<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function filterCarType(Request $request){

        $brand=$request->input('brand');
        $type=$request->input('type');
        $price=$request->input('price');
        $id=$request->header('id');


            if($brand === null && $type === null && $price === null) {
                return 0;
            }
            elseif($brand !== null && $type === null && $price === null) {
                return Car::where('brand', $brand)->get();
            }
            elseif($type !== null && $brand === null && $price === null) {
                return Car::where('car_type', $type)->get();
            }
            elseif($price !== null && ($brand === null && $type === null)) {
                return Car::where('daily_rent_price', '<=', $price)->get();
            }
            elseif($brand === null) {
                return Car::where('car_type', $type)->where('daily_rent_price', '<=', $price)->get();
            }
            elseif($type === null) {
                return Car::where('brand', $brand)->where('daily_rent_price', '<=', $price)->get();
            }
            elseif($price === null) {
                return Car::where('brand', $brand)->where('car_type', $type)->get();
            }

            else {

                return Car::where('brand', $brand)
                          ->where('car_type', $type)
                          ->where('daily_rent_price', '<=', $price)
                          ->get();
            }




    }
}
