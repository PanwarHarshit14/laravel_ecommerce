<div class="mb-3">
    <label for="city_id" class="form-label">City</label>
    <select name="city_id" class="form-select" id="city_id">
        <option value>Select City</option>
        @foreach ($cities as $id => $name)
            <option value="{{ $id }}" {{ $id === old('city_id') ? 'selected' : '' }}>{{ $name }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="code" class="form-label">Code</label>
    <input type="number" name="code" id="code" class="form-control" value="{{ old('code') }}"
        placeholder="Enter Here" autocomplete="off">
</div>
