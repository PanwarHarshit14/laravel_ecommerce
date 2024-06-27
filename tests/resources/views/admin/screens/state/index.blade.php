@extends('admin.layouts.inner')

@section('inner_section')
<form action="" method="post" id="deleteForm">
    @method('DELETE')
    @csrf
</form>
    <div class="card">
        <div class="card-body">
            <h1>View State</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Short Name</th>
                            <th>Code</th>
                            <th>Country</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($states as $key => $state)
                            <tr>
                                <td>{{ $key + $states->firstItem() }}</td>
                                <td>{{ $state->name }}</td>
                                <td>{{ $state->short_name }}</td>
                                <td>{{ $state->code }}</td>
                                <td>{{ $state->country?->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.state.edit', $state) }}">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                        data-href="{{ route('admin.state.destroy', $state) }}">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div> 
                {{$states->links()}}
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
