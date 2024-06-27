@extends('admin.layouts.inner')
 
@section('inner_section')
    <h1>Edit Product Images</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit Product Images</b> 
        </div>
        <div class="card-body">
            <form action="{{ route('admin.productimg.update', $productImg) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.productimg._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div> 
@endsection
