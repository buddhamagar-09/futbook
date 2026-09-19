@extends('admin.layouts.app')

@section('content')

    <div class="mb-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">

     
        <div>
            <h1 class="h3 mb-1">View Products</h1>
            <p class="text-body-secondary mb-0">
                Manage all products in your store.
            </p>
        </div>

        <!-- Search -->
        <div class="input-group" style="max-width: 300px;">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>

            <input type="text" id="productSearch" class="form-control" placeholder="Search products...">
        </div>
     
    </div>

    <div class="card">

     
        <div class="card-header">
            <strong>Products</strong>
        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0" id="productsTable">

                    <thead>
                        <tr>
                            <th scope="col" class="ps-3">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col" class="pe-3">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($productlist as $product)

                            <tr>

                                <!-- ID -->
                                <th scope="row" class="ps-3">
                                    {{ $product->id }}
                                </th>

                                <!-- Image -->
                                <td>
                                    <img src="{{ asset('image/products/' . $product->image) }}" alt="{{ $product->name }}"
                                        style="width: 60px; height: 60px; object-fit: cover; display: block;">
                                </td>

                                <!-- Name -->
                                <td class="fw-semibold">
                                    {{ $product->name }}
                                </td>

                                <!-- Price -->
                                <td>
                                    Rs. {{ number_format($product->price, 2) }}
                                </td>

                                <!-- Quantity -->
                                <td>
                                    {{ $product->quantity }}
                                </td>

                                <!-- Actions -->
                                <td class="pe-3">

                                    <div class="d-flex gap-1">

                                        <!-- Edit -->
                                        <a href="{{ route('admin.edit.product', $product->id) }}"
                                            class="btn btn-outline-primary btn-sm rounded-0">
                                            Edit
                                        </a>

                                        <!-- Delete -->
                                        <a href="{{ route('admin.delete.product', $product->id) }}"
                                            class="btn btn-outline-secondary btn-sm rounded-0"
                                            onclick="return confirm('Are you sure you want to delete this product?')">
                                            Delete
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
  

    </div>

    <!-- Search -->

    <script>

        document.getElementById('productSearch').addEventListener('keyup', function () {

            let search = this.value.toLowerCase();

            let rows = document.querySelectorAll('#productsTable tbody tr');

            rows.forEach(function (row) {

                let name = row.cells[2].textContent.toLowerCase();

                if (name.includes(search)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }

            });

        });

    </script>

@endsection