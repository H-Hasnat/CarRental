<?php

namespace App\Http\Controllers;

use APP\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{





    function createAccount(Request $request){
       return  User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
                'Phone Number'=>$request->input('phn_number'),
                'password'=>$request->input('password'),
                'role'=>$request->input('role'),
                'Address'=>$request->input('Address'),
        ]);


    }

    function userLogin(Request $request){

        $email=$request->input('email');
        $password=$request->input('password');

       $count=User::where('email','=',$email)->where('password','=',$password)->select('id')->first();


    if($count!=null){
        $token=JWTToken::createToken($email,$count->id);

        return response()->json([
            'status'=>'success',
            'token'=>$token,
            'messsage'=>'Login Successfully',

        ],200)->cookie('token',$token,time()+60*24*30);
    }else{
        return response()->json([
            'status'=>'failed',
        ]);
    }

    }



    function userLogout(Request $request){
         $id=$request->header('id');
         $email=$request->header('email');
        $count=User::where('id','=',$id)->count();

        if($count===1){
            $token=JWTToken::createToken($email,$id);

            return redirect('/')->cookie('token',$token,-1);


        }else{
            return response()->json([
                'status'=>'failed',

            ]);
           }
    }

    function Dashboard(Request $request){
      $id=$request->header('id');

      $user=User::find($id);
      if ($user->isAdmin()) {
        return view('admin-dashboard');
    }else if($user->isCustomer()){
        return view('cus-dashboard');

    }else{
        return view('login');
    }



    }


    function UserProfile(Request $request){
        $id=$request->header('id');
      return  User::where('id',$id)->get();
    }

    function UpdateProfile(Request $request){
        $id=$request->header('id');
        $name=$request->input('name');
        $password=$request->input('password');

        $role=$request->input('role');
        $phn_nmbr=$request->input('phn_nmbr');
        $address=$request->input('address');

        return User::where('id',$id)->update([
            'name'=>$name,

            'password'=>$password,
            'role'=>$role,
            'Phone Number'=>$phn_nmbr,
            'address'=>$address
        ]);
    }



    function CusProfile(Request $request){
        $id=$request->header('id');

      return  User::where('id',$id)->where('role','customer')->get();
    }

    // function CusProfile(Request $request){
    //     $id=$request->header('id');
    //     $name=$request->input('name');
    //     $password=$request->input('password');

    //     $role=$request->input('role');
    //     $phn_nmbr=$request->input('phn_nmbr');
    //     $address=$request->input('address');

    //     return User::where('id',$id)->update([
    //         'name'=>$name,

    //         'password'=>$password,
    //         'role'=>$role,
    //         'Phone Number'=>$phn_nmbr,
    //         'address'=>$address
    //     ]);
    // }

}
