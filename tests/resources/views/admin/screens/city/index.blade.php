@extends('admin.layouts.inner')

@section('inner_section')
<form action="" method="post" id="deleteForm">
    @method('DELETE')
    @csrf
</form>
<div class="card">
    <div class="card-body">
        <h1>View City</h1>
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
                            <td>{{ $key + $cities->firstItem() }}</td>
                            <td>{{ $city->name }}</td>
                            <td>{{ $city->short_name }}</td>
                            <td>{{ $city->code }}</td>
                            <td>{{ $city->state?->name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.city.edit', $city) }}">Edit</a>
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
        <div>
            {{$cities->links()}}
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