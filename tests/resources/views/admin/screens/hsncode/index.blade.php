@extends('admin.layouts.inner')

@section('inner_section')
    <form action="" method="post" id="deleteForm">
        @method('DELETE')
        @csrf
    </form>
    <div class="card">
        <div class="card-body">
            <h1>View HSN Code</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>GST Number</th>
                            <th>HSN Code</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($hsnCodes as $key => $hsnCode)
                            <tr>
                                <td>{{ $key + $hsnCodes->firstItem() }}</td>
                                <td>{{ $hsnCode->gst }}</td>
                                <td>{{ $hsnCode->code }}</td>
                                <td>
                                    <a href="{{ route('admin.hsncode.edit', $hsnCode) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                    data-href="{{ route('admin.hsncode.destroy', $hsnCode) }}">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{ $hsnCodes->links() }}
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
