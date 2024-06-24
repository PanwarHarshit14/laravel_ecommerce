@extends('admin.layouts.inner')

@section('inner_section')
    <h1>Edit State</h1>
    <div class="card">
        <div class="card-header">
            <i class="bi bi-plus"></i>
            <b>Edit State</b> 
        </div>
        <div class="card-body">
            <form action="{{ route('admin.state.update', $state) }}" method="POST">
                @method('PUT')
                @csrf
                @include('admin.screens.state._form')

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
