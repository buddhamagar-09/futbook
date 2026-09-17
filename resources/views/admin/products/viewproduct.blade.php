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

                <table class="table table-hover mb-0" id="productsTable">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($productlist as $product)

                            <tr>

                                <th scope="row">
                                    {{ $product->id }}
                                </th>

                                <td>
                                    <img src="{{ asset('image/products/' . $product->image) }}" alt="{{ $product->name }}"
                                        style="width: 60px; height: 60px; object-fit: cover; display: block;">
                                </td>

                                <td>
                                    {{ $product->name }}
                                </td>

                                <td>
                                    Rs. {{ $product->price }}
                                </td>

                                <td>
                                    {{ $product->quantity }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.edit.product', $product->id) }}" class="btn btn-primary btn-sm">
                                        Edit
                                    </a>

                                    <a href="{{ route('admin.delete.product', $product->id) }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this product?')">
                                        Delete
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>


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