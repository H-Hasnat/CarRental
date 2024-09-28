<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\RentMail;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalController extends Controller
{



    function createBookData(Request $request)
    {
        try {
            $user_id = $request->header('id');

            $startDate = Carbon::parse($request->input('sdate'));
            $endDate = Carbon::parse($request->input('edate'));

            // Calculate the difference in days
            $daysDifference = $startDate->diffInDays($endDate);

            $car_id = $request->input('car_id');



            $daily_rent_price = $request->input('price');

            if ($daysDifference === 0) {
                $total = $daily_rent_price;
            } else {
                $total = ($daysDifference + 1) * $daily_rent_price;
            }

            $now = Carbon::now('Asia/Dhaka')->format('Y-m-d');

            if ($now > $endDate) {
                $status = "Completed";
                // Rental::where('id', $_id)->update([
                //     'availability' => 1,
                // ]);
            } else {
                $status = "Ongoing";
                // Car::where('id', $car_id)->update([
                //     'availability' => 0,
                // ]);
            }





            Rental::create([
                'start_date' => $startDate,
                'end_date' => $endDate,
                'user_id' => $user_id,
                'car_id' => $car_id,
                'total_cost' => $total,
                'status' => $status,

            ]);

            return response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    function RentalhistroyUpdated(Request $request)
    {

        $startDate = Carbon::parse($request->input('sdate'));
        $endDate = Carbon::parse($request->input('edate'));
        $car_id = $request->input('car_id');
        $rental_id=$request->input('rental_id');
        $now = Carbon::now('Asia/Dhaka')->format('Y-m-d');

        if ($now > $endDate) {
            // $status="Completed";

            // Rental::where('id',$rental_id)->update([
            //     'status'=>$status,
            // ]);
            return   Rental::where('id', $rental_id)->update([
                'available' => 1,
            ]);
        } else {
            // $status="Ongoing";
            // Rental::where('id',$rental_id)->update([
            //     'status'=>$status,
            // ]);
            return  Rental::where('id', $rental_id)->update([
                'available' => 0,
            ]);
        }
    }

    function sendMail(Request $request)
    {

        try {
            $user_id = $request->header('id');
            $car_id = $request->input('car_id');
            $cus_email = $request->header('email');
            $roles = User::where('role', '=', 'admin')->get();
            $cus_details = Rental::where('user_id', $user_id)->with('user')->with('car')->where('car_id', $car_id)->get();
            foreach ($cus_details as $detail) {
                $car_name = $detail->car->name;
                $cus_name = $detail->user->name;
                $start_date = $detail->start_date;
                $end_date = $detail->end_date;
            }



            foreach ($roles as $role) {
                $email = $role->email;
                Mail::to($email)->send(new RentMail($car_name, $cus_name, $start_date, $end_date));
            }

            return  Mail::to($cus_email)->send(new RentMail($car_name, $cus_name, $start_date, $end_date));
        } catch (Exception $e) {
            return $e;
        }
    }



    function RentalHistroyData(Request $request)
    {
        $id = $request->header('id');

        return $rentals = Rental::where('user_id', $id)->with('user')->with('car')->get();
    }


    function cancleBook(Request $request)
    {
        $rental_id = $request->input('id');
        $car_id = $request->input('car_id');
        Rental::where('id', $rental_id)->delete();
        return Car::where('id', $car_id)->update([
            'availability' => '1'
        ]);
    }



    function RentalDetailsForMsg(Request $request){
        $car_id=$request->input('car_id');
         $user_id=$request->header('id');
        return Rental::where('car_id',$car_id)->where('user_id',$user_id)->get();
     }

   
}
