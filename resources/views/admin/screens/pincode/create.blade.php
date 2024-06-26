@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Add Pincode</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Add New Pincode</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pincode.store') }}" method="POST">
                @csrf
                @include('admin.screens.pincode._form')

                <button class="btn btn-primary">Save &amp; Submit</button>
            </form>
        </div>
    </div>
@endsection