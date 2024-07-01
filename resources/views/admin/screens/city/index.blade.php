@extends('admin.layouts.inner')

@section('inner_section')
    <form action="" method="post" id="deleteForm">
        @method('DELETE')
        @csrf
    </form>
    <div class="card mb-3">
        <div class="card-body">
            <form action="">
                <div class="row align-items-end g-1">
                    <div class="col-sm-3">
                        <label for="search" class="form-label">Search By Name</label>
                        <input name="search" type="search" autocomplete="off" class="form-control" placeholder="Search..."
                            value="{{ request('search') }}">
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h1>View City</h1>
                <div class="d-none bulk-actions">
                    <button type="button" class="btn btn-outline-danger btn-sm bulk-delete-btn">
                        <i class="bi bi-trash"></i> Remove Bulk
                    </button>
                </div>
            </div>
            <form action="{{ route('admin.city.bulk-delete') }}" id="bulkDeleteForm" method="post">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Code</th>
                                <th>State</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $key => $city)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="delIds[]" class="form-check-input check-inp" type="checkbox"
                                                value="{{ $city->id }}" id="check_{{ $city->id }}">
                                            <label class="form-check-label" for="check_{{ $city->id }}">
                                                | {{ $key + $cities->firstItem() }}
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->short_name }}</td>
                                    <td>{{ $city->code }}</td>
                                    <td>{{ $city->state?->name }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.city.edit', $city) }}">Edit</a>
                                        <button type="button" class="btn btn-danger btn-sm delete-btn"
                                            data-href="{{ route('admin.city.destroy', $city) }}">
                                            Remove
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            <div>
                {{ $cities->links() }}
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

            $(document).on("click", ".check-inp", function() {
                if ($(".check-inp:checked").length) {
                    $('.bulk-actions').removeClass("d-none");
                } else {

                    $('.bulk-actions').addClass("d-none");
                }
            });

            $(document).on("click", ".bulk-delete-btn", function() {
                if (confirm("Are you sure delete selected item(s)?"))
                    $('#bulkDeleteForm').submit();
            });
        });
    </script>
@endpush
