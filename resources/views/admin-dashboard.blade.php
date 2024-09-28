@extends('layout1.layout')

@section('content')

<div class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <a class="navbar-brand"href="{{route('admindashboard')}}"><img id="img" src="images/logo.png"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a class="nav-link" href="{{route('admindashboard')}}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('about')}}">About</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{route('customer')}}">Customers</a>
                 </li>

                 <li class="nav-item">
                    <a class="nav-link" href="{{route('cars')}}">Cars</a>
                 </li>

                 <li class="nav-item">
                    <a class="nav-link" href="{{route('rental')}}">Rental Details</a>
                 </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                 </li>

                 <li class="nav-item">
                    <a class="nav-link" href="{{route('adminprofile')}}">Profile</a>
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

<div class="container-fluid">
    <div class="row ">
      <!-- Total Number of Cars -->
      <div class="col-md-3 mb-4 mt-4">
        <div class="card bg-info text-white">
          <div class="card-body">
            <h5 class="card-title">Total Cars</h5>
            <h3 id="totalCars"></h3>
          </div>
        </div>
      </div>

      <!-- Number of Available Cars -->
      <div class="col-md-3 mb-4 mt-4">
        <div class="card bg-success text-white">
          <div class="card-body">
            <h5 class="card-title">Available Cars</h5>
            <h3 id="availableCars"></h3>
          </div>
        </div>
      </div>

      <!-- Total Number of Rentals -->
      <div class="col-md-3 mb-4 mt-4">
        <div class="card bg-warning text-white">
          <div class="card-body">
            <h5 class="card-title">Total Rentals</h5>
            <h3 id="totalRentals"></h3>
          </div>
        </div>
      </div>

      <!-- Total Earnings from Rentals -->
      <div class="col-md-3 mb-4 mt-4">
        <div class="card bg-danger text-white">
          <div class="card-body">
            <h5 class="card-title">Total Earnings</h5>
            <h3 id="totalEarnings"></h3>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="jscode/admin-dashboard.js"></script>
@endsection
