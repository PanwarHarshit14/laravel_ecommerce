@extends('admin.layouts.inner')

@section('inner_section')
<form action="" method="post" id="deleteForm">
    @method('DELETE')
    @csrf
</form>
<div class="card">
    <div class="card-body">
        <h1>View Pincode</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Code</th>
                        <th>City Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pincodes as $key => $pincode)
                        <tr>
                            <td>{{ $key + $pincodes->firstItem() }}</td>
                            <td>{{ $pincode->code }}</td>
                            <td>{{ $pincode->city?->name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.pincode.edit', $pincode) }}">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm delete-btn"
                                        data-href="{{ route('admin.pincode.destroy', $pincode) }}">
                                        Remove
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{$pincodes->links()}}
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