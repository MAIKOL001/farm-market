<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Farm Market</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
@include('layouts.productscss')

</head>
<body>
<!-- partial:index.partial.html -->
<div class="app-container">
 @include('layouts.sidebar')
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">FARM CLOTHING</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
      <button class="app-content-headerButton">Add Product</button>
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
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/3a/ee/ee/3aeeee1d04b16f5ab613337aca0721e7.jpg" alt="product">
            <span>Farm Produce</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Instock</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>233customers</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>233</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price(per kg):</span>12sh each</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/20/99/12/20991218d9354ddedbfce2f6efa4d230.jpg" alt="product">
            <span>Ferterlizers</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Instock</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>36</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>460</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>40sh per kg</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/13/b0/38/13b03821a6f2beb19b3bbb1a74c58e8c.jpg" alt="product">
            <span>Machinery</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>61</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>56</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$360</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/49/7a/03/497a03402bbaf502d5c14f86bc74c71d.jpg" alt="product">
            <span>Farm Clothing</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status disabled">Disabled</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>41</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>66</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$260</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/7b/9b/24/7b9b2412e2dcb00985ff8468813fa211.jpg" alt="product">
            <span>Gadgets</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>32</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>40</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$350</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/e0/b6/77/e0b6779a791e5f22217795784ded1c79.jpg" alt="product">
            <span>Services</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status disabled">Disabled</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>22</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>44</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$160</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/f0/07/ca/f007ca8633e3b0e7f65af8342fac99bf.jpg" alt="product">
            <span>Farm chemicals</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>23</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>45</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$340</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/42/a3/a8/42a3a8819f160053953177152d65c25b.jpg" alt="product">
            <span>Planting Seeds</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>32</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>40</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$350</div> --}}
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://i.pinimg.com/564x/ab/15/ad/ab15ada790733624edb32c2945cede18.jpg" alt="product">
            <span>Tools</span>
          </div>

        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>24</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>46</div>
        {{-- <div class="product-cell price"><span class="cell-label">Price:</span>$60</div> --}}
      </div>
      <!-- <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://images.unsplash.com/photo-1600494603989-9650cf6ddd3d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTV8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
            <span>Forest</span>
          </div>
        <div class="product-cell category"><span class="cell-label">Category:</span>Living Room</div>
        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>41</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>16</div>
        <div class="product-cell price"><span class="cell-label">Price:</span>$270</div>
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njd8fGludGVyaW9yfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60" alt="product">
            <span>Sand</span>
          </div>
        <div class="product-cell category"><span class="cell-label">Category:</span>Living Room</div>
        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status disabled">Disabled</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>52</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>16</div>
        <div class="product-cell price"><span class="cell-label">Price:</span>$230</div>
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://images.unsplash.com/photo-1533779283484-8ad4940aa3a8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODd8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
            <span>Autumn</span>
          </div>
        <div class="product-cell category"><span class="cell-label">Category:</span>Decoration</div>
        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>21</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>46</div>
        <div class="product-cell price"><span class="cell-label">Price:</span>$252</div>
      </div>
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
            <span>Boheme</span>
          </div>
        <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Sales:</span>32</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>40</div>
        <div class="product-cell price"><span class="cell-label">Price:</span>$350</div>
      </div>
    </div>-->
    </div>
  </div>
</div>
<!-- partial -->
  @include('layouts.js')
</body>
</html>
