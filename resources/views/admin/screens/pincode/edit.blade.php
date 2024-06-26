@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit Pincode</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit Pincode</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pincode.update', $pincode) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.pincode._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection