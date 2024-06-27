@extends('admin.layouts.inner')

@section('inner_section')
<form action="" method="post" id="deleteForm">
    @method('DELETE')
    @csrf
</form>
    <div class="card">
        <div class="card-body">
            <h1>View Product</h1>x
            <div class="table-responsive">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Hsn Code</th>
                            <th>Category</th>
                            <th>Reg Price</th>
                            <th>Trade Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key + $products->firstItem() }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->hsncode?->code }}</td> 
                                <td>{{ $product->category?->name}}</td>
                                <td>{{ $product->reg_price }}</td>
                                <td>{{ $product->trade_price }}</td>
                                <td>{{ $product->discount }}</td>
                                <td>
                                    <img src="{{ $product->image }}" alt="{{ $product->image }}" style=" width: 5rem; height:5rem">
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                        data-href="{{ route('admin.product.destroy', $product) }}">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div> 
                {{$products->links()}}
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
