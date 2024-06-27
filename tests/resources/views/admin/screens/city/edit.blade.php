@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit City</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit City</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.city.update', $city) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.city._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection