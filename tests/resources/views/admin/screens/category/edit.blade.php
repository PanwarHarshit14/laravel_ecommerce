@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit Category</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit Category</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.update', $category) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.category._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection