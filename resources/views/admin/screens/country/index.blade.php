@extends('admin.layouts.inner')

@section('inner_section')
    <form action="" method="post" id="deleteForm">
        @method('DELETE')
        @csrf
    </form>
    <div class="card">
        <div class="card-body">
            <h1>View Country</h1>
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
                                <td>{{ $key + $countries->firstItem() }}</td>
                                <td>{{ $country->name }}</td>
                                <td>{{ $country->short_name }}</td>
                                <td>{{ $country->code }}</td>
                                <td>{{ $country->flag }}</td>
                                <td>
                                    <a href="{{ route('admin.country.edit', $country) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                        data-href="{{ route('admin.country.destroy', $country) }}">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
        });
    </script>
@endpush
