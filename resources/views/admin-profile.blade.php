
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
                            <input type="text" class="form-control" id="profileId"  readonly>
                        </div>

                        <!-- Name -->
                        <div class="form-group">
                            <label for="profileName">Name</label>
                            <input type="text" class="form-control" id="profileName" placeholder="Enter your name" >
                        </div>

                        <!-- Email (readonly) -->
                        <div class="form-group">
                            <label for="profileEmail">Email</label>
                            <input type="email" class="form-control" id="profileEmail"  readonly>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="profilePassword">Password</label>
                            <input type="password" class="form-control" id="profilePassword" placeholder="Enter new password">
                        </div>

                        <!-- Role -->
                        <div class="form-group">
                            <label for="profileRole" id="select-role">Role</label>
                            {{-- <select class="form-control" id="profileRole">
                                <option value="customer">Customer</option>
                                <option value="admin">Admin</option>
                            </select> --}}
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="profilePhone">Phone Number</label>
                            <input type="tel" class="form-control" id="profilePhone" placeholder="Enter your phone number">
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="profileAddress">Address</label>
                            <textarea class="form-control" id="profileAddress" rows="3" placeholder="Enter your address"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" onclick="Update()">Update</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="jscode/admin-profile.js"></script>

@endsection
