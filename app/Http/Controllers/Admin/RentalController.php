<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class RentalController extends Controller
{

    function AddRental(Request $request){
        try{
            $user_id=$request->header('id');

            $startDate = Carbon::parse($request->input('start_date'));
            $endDate = Carbon::parse($request->input('end_date'));

            // Calculate the difference in days
          $daysDifference = $startDate->diffInDays($endDate);
                $total_cost=$request->input('total_cost');


                   $car_id=$request->input('car_id');

            $status=$request->input('status');

          $car=Car::where('id',$car_id)->select('daily_rent_price')->first();


            if( $daysDifference === 0){
                $total=$car->daily_rent_price;
            }else{
                $total=($daysDifference+1)*$car->daily_rent_price;
            }



          Rental::create([
                'start_date'=>$startDate,
                'end_date'=>$endDate,
            'user_id'=>$user_id,
            'car_id'=>$car_id,
            'total_cost'=>$total,
            'status'=>$status

            ]);

            return response()->json([
                'status'=>'success'
            ]);

        }catch(Exception $e){
            return $e;
        }


    }

    function EditRental(Request $request){
        try{
            // $user_id=$request->header('id');
            $rental_id=$request->input('id');
            $car_id=$request->input('car_id');
            $user_id=$request->input('user_id');

            $start_date=Carbon::parse($request->input('start_date'));
                $end_date=Carbon::parse($request->input('end_date'));

                 $car=Car::where('id',$car_id)->select('daily_rent_price')->first();
                //    $total=$car->daily_rent_price;

                if($start_date->diffInDays($end_date)=== 0){
                    $total=$car->daily_rent_price;
                }else{
                    $total=($start_date->diffInDays($end_date))*$car->daily_rent_price;
                }
           return Rental::where('id',$rental_id)->update([
                'start_date'=>$start_date,
                'end_date'=>$end_date,
            'total_cost'=>$total,
            'car_id'=>$car_id,
            'user_id'=>$user_id

            ]);
        }catch(Exception $e){
            return $e;
        }

    }

    function DeleteRental(Request $request){
        $rental_id=$request->input('id');
        return Rental::where('id',$rental_id)->delete();
    }
    function DetailsRental(Request $request){
       return  Rental::with('user')->get();

    }

    function DetailsRentalbyid(Request $request){
       $id=$request->input('id');
     $cus_id=$request->input('id');

        return  Rental::where('id',$id)->orWhere('user_id',$cus_id)->with('user')->get();

     }

  




}
