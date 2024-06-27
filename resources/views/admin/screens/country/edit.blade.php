@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit Country</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit Country</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.country.update', $country) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @include('admin.screens.country._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
