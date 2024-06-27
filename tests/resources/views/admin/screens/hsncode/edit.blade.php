@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit HSN Code</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit HSN Code</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.hsncode.update', $hsnCode) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.hsncode._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection