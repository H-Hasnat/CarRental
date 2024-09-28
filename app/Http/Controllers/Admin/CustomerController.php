<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


  

    function AddCustomer(Request $request){

try{
    User::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>$request->input('password'),
        'role'=>$request->input('role'),
        'Phone Number'=>$request->input('phn_number'),
        'Address'=>$request->input('Address'),

    ]);

    return response()->json([
        'status'=>'success'
    ]);
}catch(Exception $e){
    return $e;
}





    }


    function EditCustomer(Request $request){
        try{
            $id=$request->input('id');

            return User::where('id',$id)->update([

               'name'=>$request->input('name'),
               'email'=>$request->input('email'),
               'password'=>$request->input('password'),
               'role'=>$request->input('role'),
               'Phone Number'=>$request->input('phn_number'),
               'Address'=>$request->input('Address'),

            ]);
        }catch(Exception $e){
            return $e;
        }










    }

    function DeleteCustomer(Request $request){
        try{
            $id=$request->input('id');
            return User::where('id',$id)->delete();
        }
        catch(Exception $e){
            return $e;
        }


    }


    function DetailsCustomer(Request $request){

        return User::where('role','customer')->get();

    }




    function DetailsCustomerbyid(Request $request){

        $cus_id=$request->input('id');
        return User::where('id',$cus_id)->first();

    }




}
