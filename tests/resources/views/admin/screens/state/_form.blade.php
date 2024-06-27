<div class="mb-3">
    <label for="country_id" class="form-label">Country</label>
    <select name="country_id" class="form-select" id="country_id">
        <option value>Select Country</option>
        @foreach ($countries as $id => $name)
            <option value="{{ $id }}" {{ $id === old('country_id') ? 'selected' : '' }}>{{ $name }}
            </option>
        @endforeach
    </select>
</div>
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
    <label for="code" class="form-label">State Code</label>
    <input type="number" name="code" id="code" class="form-control" placeholder="Enter Here"
        value="{{ old('code') }}" autocomplete="off">
</div>