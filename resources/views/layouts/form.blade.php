 <form method="POST" action="{{ route('addproduct') }}" enctype="multipart/form-data">
  @csrf

  <label for="productName" style="color: #fff">Product Name:</label>
  <input type="text" id="productName" name="productName" required>

  <label for="quantity" style="color: #fff">Quantity:</label>
  <input type="number" id="quantity" name="quantity" required>

  <label for="category" style="color: #fff">Category:</label>
  <select id="category" name="category">
    <option value="foodproduce">food produce</option>
    <option value="machinery">machinery</option>
    <option value="tools">tools</option>
    <option value="clothing">clothing</option>
  </select>

  <label for="imageUpload" style="color: #fff">Image Upload:</label>
  <input type="file" id="imageUpload" name="imageUpload" accept="image/*" required>

  <label for="price" style="color: #fff">Price:</label>
  <input type="number" id="price" name="price" step="0.01" required>

  <label for="description" style="color: #fff">Description:</label>
  <textarea id="description" name="description" rows="4" required></textarea>

  <label for="phoneNumber" style="color: #fff">Phone Number:</label>
  <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" required>
  <small>Format: 10 digits only</small>

  <button type="submit" style="color: #fff">Submit</button>
</form>
