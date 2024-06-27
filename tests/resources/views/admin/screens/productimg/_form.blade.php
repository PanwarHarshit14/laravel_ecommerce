<div class="mb-3">
    <label for="product_id" class="form-label">Product</label>
    <select name="product_id" class="form-select" id="product_id">
        <option value>Select Product</option>
        @foreach ($products as $id => $name)
            <option value="{{ $id }}" {{ $id === old('product_id') ? 'selected' : '' }}>{{ $name }}
            </option>
        @endforeach
    </select> 
</div>
<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input class="form-control" type="file" name="image" id="image">
  </div>