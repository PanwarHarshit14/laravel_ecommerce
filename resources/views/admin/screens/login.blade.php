@extends('admin.layouts.app')

@section('main_section')
<div class="bg-warning">
    <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-4">
            <div class="card p-3 rounded rounded-4">
                <div class="card-header text-center">
                    <span class="text-warning fs-5 fw-semibold"><i class="bi bi-person"></i>
                        Admin</span>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div> 
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="link-warning">Forget Password</a>
                        <a href="#" class="btn btn-outline-warning">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection