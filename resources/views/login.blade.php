@extends('layout1.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow border-primary">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <div class="invalid-feedback">
                                Please enter your password.
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" onclick="Login()">Login</button>
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('signup') }}">here sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jscode/login.js"></script>
@endsection
