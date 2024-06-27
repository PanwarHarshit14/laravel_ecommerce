@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Add Country</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Add New Country</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.country.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.screens.country._form')

                <button class="btn btn-primary">Save &amp; Submit</button>
            </form>
        </div>
    </div>
@endsection