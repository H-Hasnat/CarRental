<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function homePage(){
        return view('home');
    }


    function aboutPage(){
        return view('about');
    }

    function contactPage(){
        return view('contact');
    }

    function rentalHistroy(){
        return view('rentalhistroy');
    }



    function LogIn(){
        return view('login');
    }


    function SignUp(){
        return view('registration');
    }

    function CustomerProfile(){
        return view('cus-profile');
    }



//Admin
function CustomerPage(){
    return view('pages.customer');
    // view('postlogin.customer');
}
    function Cars(){
        return view('pages.cars');
    }

    function Rental(){
        return view('pages.rental');
    }

    function AdminProfile(){
        return view('admin-profile');
    }

}
