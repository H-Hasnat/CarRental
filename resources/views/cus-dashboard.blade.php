@extends('layout1.layout')
@section('content')
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <a class="navbar-brand"href="{{ route('home') }}"><img id="img" src="images/logo.png"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rentalhistroy') }}">Rental Histroy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cusprofile') }}">Profile</a>
                        </li>

                    </ul>

                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="/userLogout"><button class="btn btn-success ">Logout</button></a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    </form>
                </div>
            </nav>
        </div>
    </div>



    @include('home-element')
@endsection
