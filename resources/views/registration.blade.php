{{--
    @extends('layout1.layout')

    @section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-primary">
                    <div class="card-body">
                        <h2 class="text-center">Register</h2>

                            <div class="col-sm-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                            </div>



                        <div class="col-sm-6 mb-3">
                            <label for="phn_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phn_number" id="phn_number" placeholder="Enter your phone number">
                        </div>

                            <div class="col-sm-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                            </div>


                        <div class="col-sm-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
                        </div>
                        <div  class="col-sm-6 mb-3">
                            <select name="role" id="role" class="form-select">
                                <option value="customer">Customer</option>
                                <option value="admin">Admin</option>

                            </select>
                        </div>



                        <div class="col-sm-6 mb-3">
                            <button type="submit" class="btn btn-primary" onclick="SubmitInformation()">Submit</button>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>


    <script src="jscode/registration.js"></script>
    @endsection

 --}}



@extends('layout1.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-primary">
                    <div class="card-body">
                        <h2 class="text-center">Register</h2>


                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name">
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label for="phn_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phn_number" id="phn_number"
                                placeholder="Enter your phone number">
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter your password">
                        </div>

                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter your address">
                        </div>

                        <div class="form-group">
                            <label for="role" class="form-label">Role</label>
                            <select name="role" id="role" class="custom-select">
                                <option value="customer">Customer</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" onclick="SubmitInformation()">Submit</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jscode/registration.js"></script>
@endsection