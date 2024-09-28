<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    function reportAll(Request $request){
        $cars=Car::select('id')->count();
        $availability=Car::where('availability','=','1')->select('availability')->count();
        $rental=Rental::select('id')->count();
     $rental_cost=Rental::select('total_cost')->get();
     $total= $rental_cost->sum('total_cost');

        return response()->json([
            'cars'=>$cars,
            'availability'=>$availability,
            'rent'=>$rental,
            'rental_cost'=>$total
        ]);

    }
}
