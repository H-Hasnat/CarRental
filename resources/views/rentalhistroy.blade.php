@extends('layout1.layout')

@section('content')

 <div class="container mt-5">

    <div class="mb-4">
        <a href="/Dashboard" class="btn btn-success mt-4">Back</a>

        </div>

    <h1 class="bg-primary text-white mb-4 mx-auto p-4">Rental Histroy</h1>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">

        <a class="nav-link active"  id="ongoing-tab" data-toggle="tab" href="#ongoing" role="tab" aria-controls="ongoing" aria-selected="true">Ongoing</a>


    </li>
      <li class="nav-item">
        <a class="nav-link" id="completed-tab" data-toggle="tab" href="#completed" role="tab" aria-controls="completed" aria-selected="false">Completed</a>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="ongoing-tab">

        <table class="table table-striped mt-3 table-bordered" id="Ongoing">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Car Name</th>
                <th>Start Date</th>
                <th>End Date</th>


              </tr>
            </thead>

            <tbody id="OngoingBody">




            </tbody>

          </table>


      </div>

      <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">


        <table class="table table-striped mt-3 table-bordered" id="Completed">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Car Name</th>
                <th>Start Date</th>
                <th>End Date</th>
              </tr>
            </thead>

            <tbody id="CompleteBody">



            </tbody>

          </table>



      </div>

    </div>
  </div>

  <script src="jscode/rental-histroy.js"></script>
@endsection
