@extends('admin.layouts.app')

@section('main_section')
    <div class="bg-warning">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-lg-4">
                    <div class="card rounded rounded-4">
                        <div class="card-header text-center">
                            <span class="text-warning fs-5 fw-semibold"><i class="bi bi-person"></i>
                                Admin</span>
                        </div>
                        <div class="card-body">
                            <x-alert />
                            <form action="{{ route('login.post') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Username">
                                    <label for="username">Username*</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                    <label for="password">Password*</label>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="link-warning">Forget Password</a>
                                    <button class="btn btn-outline-warning">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
