<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{

    function AddNewCar(Request $request){

        try{
            $image=$request->file('img');
            $t=time();
            $originalName=$image->getClientOriginalName();
           $newName=$t.$originalName;

            $img_url="photo/".$newName;

            $image->move(public_path('photo'),$newName);

            Car::create([

                'name'=>$request->input('name'),
                'brand'=>$request->input('brand'),
                'model'=>$request->input('model'),
                'year'=>$request->input('year'),
                'car_type'=>$request->input('car_type'),
                'daily_rent_price'=>$request->input('daily_rent_price'),
                'availability'=>$request->input('availability'),
                'image'=>$img_url,

            ]);

            return response()->json([
                'status'=>'success'
            ]);
        }catch(Exception $e){
            return $e;
        }

    }


    function EditCar(Request $request){
       
         $id=$request->input('id');

        if($request->hasFile('newimg')){


            //delete old img
         $oldImg= Car::where('id',$id)->select('image')->first();
         File::delete($oldImg->image);



             //add new image
        $newImg=$request->file('newimg');
        $t=time();
        $originalName=$newImg->getClientOriginalName();
        $newName=$t.$originalName;
         $img_url="photo/".$newName;
        $newImg->move(public_path('photo'),$newName);



          Car::where('id',$id)->update([
                'name'=>$request->input('name'),
                    'brand'=>$request->input('brand'),
                    'model'=>$request->input('model'),
                    'year'=>$request->input('year'),
                    'car_type'=>$request->input('car_type'),
                    'daily_rent_price'=>$request->input('daily_rent_price'),
                    'availability'=>$request->input('availability'),
                    'image'=>$img_url,
             ]);


             return response()->json([
                'status'=>'success'
            ]);



        }else{

            Car::where('id',$id)->update([
                'name'=>$request->input('name'),
                    'brand'=>$request->input('brand'),
                    'model'=>$request->input('model'),
                    'year'=>$request->input('year'),
                    'car_type'=>$request->input('car_type'),
                    'daily_rent_price'=>$request->input('daily_rent_price'),
                    'availability'=>$request->input('availability'),

             ]);


            return response()->json([
                'status'=>'success'
            ]);

        }

    }

    function DeleteCar(Request $request){
        $id=$request->input('id');
        $oldImg= Car::select('image')->first();
        File::delete($oldImg->image);
        return Car::where('id',$id)->delete();

    }


    function DetailsCar(){
        return Car::get();
    }



    function DetailsCarbyid(Request $request){
        $carid=$request->input('id');
        return Car::where('id',$carid)->get();
    }
}
