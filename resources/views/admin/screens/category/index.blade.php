@extends('admin.layouts.inner')

@section('inner_section')
<form action="" method="post" id="deleteForm">
    @method('DELETE')
    @csrf
</form>
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
                            <td>{{ $category->Category_id }}</td>
                            <td>{{ $category->image }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.category.edit', $category) }}">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm delete-btn"
                                data-href="{{ route('admin.category.destroy', $category) }}">
                                Remove
                            </button>
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


@push('extra_scripts')
    <script>
        $(function() {
            $(document).on("click", ".delete-btn", function() {
                let action = $(this).data('href');

                if (confirm("Are you sure delete this item?"))
                    $('#deleteForm').attr('action', action).submit();
            });
        });
    </script>
@endpush