@if ($errors->any())
    <div class="alert alert-danger">
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger">{{ Session::get('danger') }}</div>
@endif
