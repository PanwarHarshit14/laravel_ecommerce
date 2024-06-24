@extends('admin.layouts.inner')

@section('inner_section')
<div class="card">
    <div class="card-body">
        <h1>View Category</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category_id</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <td>{{ $key + $categories->firstItem() }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->image }}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{$categories->links()}}
        </div>
    </div>
</div>
    
@endsection