<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
        placeholder="Enter Here" autocomplete="off">
</div>
<div class="mb-3">
    <label for="short_name" class="form-label">Short Name</label>
    <input type="text" name="short_name" id="short_name" class="form-control" placeholder="Enter Here"
        value="{{ old('short_name') }}" autocomplete="off">
</div>
<div class="mb-3">
    <label for="code" class="form-label">Code</label>
    <input type="number" name="code" id="code" class="form-control" placeholder="Enter Here"
        value="{{ old('code') }}" autocomplete="off">
</div>
@if (!empty($country->flag))
    <div class="col-1 my-3">
        <img src="{{ $country->flag }}" alt="" class="img-fluid">
    </div>
@endif
<div class="input-group mb-3">
    <input type="file" name="flag" class="form-control" id="flag">
    <label class="input-group-text" for="flag">Flag</label>
  </div>