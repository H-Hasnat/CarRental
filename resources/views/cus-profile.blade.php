
@extends('layout1.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mb-4">
                <a href="/Dashboard" class="btn btn-success">Back</a>
            </div>
            <div class="card">

                <div class="card-header bg-primary text-white text-center">

                    <h4>Profile Information</h4>
                </div>
                <div class="card-body">

                        <!-- ID (hidden) -->
                        <div class="form-group">
                            <label for="profileId">ID</label>
                            <input type="text" class="form-control" id="cus-Id"  readonly>
                        </div>

                        <!-- Name -->
                        <div class="form-group">
                            <label for="profileName">Name</label>
                            <input type="text" class="form-control" id="cus-Name" placeholder="Enter your name" >
                        </div>

                        <!-- Email (readonly) -->
                        <div class="form-group">
                            <label for="profileEmail">Email</label>
                            <input type="email" class="form-control" id="cus-Email"  readonly>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="profilePassword">Password</label>
                            <input type="password" class="form-control" id="cus-Password" placeholder="Enter new password">
                        </div>

                        <!-- Role -->
                        <div class="form-group">
                            <label class="form-label" >Role</label>
                            <select name="" id="cus-role" class="form-control">
                            <option value="customer">customer</option>

                            </select>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="profilePhone">Phone Number</label>
                            <input type="tel" class="form-control" id="cus-Phone" placeholder="Enter your phone number">
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="profileAddress">Address</label>
                            <textarea class="form-control" id="cus-Address" rows="3" placeholder="Enter your address"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" onclick="CusUpdate()">Update</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="jscode/cus-profile.js"></script>

@endsection
