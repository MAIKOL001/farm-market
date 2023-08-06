<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Farm Market</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
@include('layouts.productscss')
<!-- Add Bootstrap CSS -->



</head>
<body>
<!-- partial:index.partial.html -->
<div class="app-container">
 @include('layouts.sidebar')
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Welcome</h1>
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal"><i class="material-icons">shopping_cart</i></button>

        <div class="account-info">
      <div class="account-info-picture">
        <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="Account">
      </div>
      <div class="account-info-name">{{ Auth::user()->name }}</div>
      <button class="account-info-more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      </button>
    </div>
    </div>
    <div class="app-content-actions">
      <input class="search-bar" placeholder="Search..." type="text">
    </div>

    <div class="products-area-wrapper gridView">
      <div class="products-header">
        <div class="product-cell image">
          Items
          <button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
          </button>
        </div>

      </div>
  @foreach ($products as $product)
    <div class="products-row">
        <div class="product-cell image">

<img src="{{ asset('storage/' . $product->imageUpload) }}" alt="Product">


            <span>{{ $product->productName }}</span>
        </div>
        <div class="product-cell status-cell">
            <span class="cell-label">Status:</span>
            <span class="status active">Instock</span>
        </div>
        <div class="product-cell sales">
            <span class="cell-label">Price(ksh):</span>{{ $product->price }} per kg
        </div>
        <div class="product-cell stock">
            <span class="cell-label">Quantity:</span>{{ $product->quantity }}
        </div>
        <div class="product-cell stock">
            <span class="cell-label">Description:</span>{{ $product->description }}
        </div>
        <div class="product-cell stock">
            <span class="cell-label">Phone:</span>{{ $product->phoneNumber }}
        </div>        <!-- Add to Cart button -->
     <button type="button" class="addToCartButton" >
        Add to cart
     </button>

    </div>
@endforeach







    </div>
  </div>
</div>


<!-- partial -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CART</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="container mt-4">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Avocado</td>
          <td>10(kg)</td>
          <td>560</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button></td>
        </tr>
        <tr>
          <td>Grapes</td>
          <td>5(kg)</td>
          <td>1000</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button></td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <script>
    // Function to delete the row when delete button is clicked
    function deleteRow(button) {
      const row = button.parentNode.parentNode;
      row.remove();
    }
  </script>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Check Out</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">clear cart</button>
        </div>

      </div>
    </div>
  </div>

  @include('layouts.js')
</body>
</html>
