@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit Product</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit Product</b> 
        </div>
        <div class="card-body">
            <form action="{{ route('admin.product.update', $product) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.product._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
