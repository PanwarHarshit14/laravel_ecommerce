@extends('admin.layouts.inner')

@section('inner_section')
<form action="" method="post" id="deleteForm">
    @method('DELETE')
    @csrf
</form>
    <div class="card">
        <div class="card-body">
            <h1>View Product Image</h1>x
            <div class="table-responsive">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productImgs as $key => $productImg)
                            <tr>
                                <td>{{ $key + $productImgs->firstItem() }}</td>
                                <td>{{ $productImg->image }}</td>
                                <td>{{ $productImg->product?->name }}</td> 
                                <td>
                                    <a href="{{ route('admin.productimg.edit', $productImg) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                        data-href="{{ route('admin.productimg.destroy', $productImg) }}">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div> 
                {{$productImgs->links()}}
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
