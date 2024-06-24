{{-- <div class="mb-3">
    <label for="hsncode_id" class="form-label">Hsncode</label>
    <select name="hsncode_id" class="form-select" id="hsncode_id">
        <option value>Select Hsncode</option>
        @foreach ($hsncodes as $id => $name)
            <option value="{{ $id }}" {{ $id === old('hsncode_id') ? 'selected' : '' }}>{{ $name }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" class="form-select" id="category_id">
        <option value>Select Category</option>
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
    <label for="reg_price" class="form-label">Reg Price</label>
    <input type="number" name="reg_price" id="reg_price" class="form-control" placeholder="Enter Here"
        value="{{ old('reg_price') }}" autocomplete="off">
</div>
<div class="mb-3">
    <label for="trade_price" class="form-label">Trade Price</label>
    <input type="number" name="trade_price" id="trade_price" class="form-control" placeholder="Enter Here"
        value="{{ old('trade_price') }}" autocomplete="off">
</div>
<div class="mb-3">
    <label for="discount" class="form-label">Discount</label>
    <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter Here"
        value="{{ old('discount') }}" autocomplete="off">
</div>