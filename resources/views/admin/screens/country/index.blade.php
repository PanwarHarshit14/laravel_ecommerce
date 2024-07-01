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
                <h1>View Country</h1>
                <div class="d-none bulk-actions">
                    <button type="button" class="btn btn-outline-danger btn-sm bulk-delete-btn">
                        <i class="bi bi-trash"></i> Remove Bulk
                    </button>
                </div>
            </div>
            <form action="{{ route('admin.country.bulk-delete') }}" id="bulkDeleteForm" method="post">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Code</th>
                                <th>Flag</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countries as $key => $country)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="delIds[]" class="form-check-input check-inp" type="checkbox"
                                                value="{{ $country->id }}" id="check_{{ $country->id }}">
                                            <label class="form-check-label" for="check_{{ $country->id }}">
                                                | {{ $key + $countries->firstItem() }}
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{ $country->name }}</td>
                                    <td>{{ $country->short_name }}</td>
                                    <td>{{ $country->code }}</td>
                                    <td>
                                        <img src="{{ $country->flag }}" alt="{{ $country->name }}"
                                            style=" width: 5rem; height:5rem">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.country.edit', $country) }}"
                                            class="btn btn-link text-info btn-sm bi bi-pencil"></a>
                                        <button type="button"
                                            class="btn btn-link text-danger btn-sm delete-btn bi bi-trash"
                                            data-href="{{ route('admin.country.destroy', $country) }}"></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            <div>
                {{ $countries->links() }}
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
