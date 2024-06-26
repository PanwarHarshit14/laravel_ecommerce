{{-- <div class="mb-3">
  <label for="category_id" class="form-label">Country</label>
  <select name="category_id" class="form-select" id="category_id">
      <option value>Select Country</option>
      @foreach ($categories as $id => $name)
          <option value="{{ $id }}" {{ $id === old('category_id') ? 'selected' : '' }}>{{ $name }}
          </option>
      @endforeach
  </select>
</div> --}}
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
        placeholder="Enter Here" autocomplete="off">
</div>
<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input class="form-control" type="file" name="image" id="image">
  </div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input class="form-control" name="description" id="description" value="{{ old('description') }}" autocomplete="off"></input>
  </div>