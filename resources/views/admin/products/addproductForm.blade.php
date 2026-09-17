@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card mt-4">

        <div class="card-header">
            <h4 class="mb-0">Add Product</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.product.add') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <!-- Product Name -->
                    <div class="col-md-6 mb-4">
                        <label for="product_name" class="form-label">
                            Product Name
                        </label>

                        <input
                            type="text"
                            id="product_name"
                            name="product_name"
                            class="form-control"
                            placeholder="Enter product name"
                            required
                        >
                    </div>


                    <!-- Price -->
                    <div class="col-md-6 mb-4">
                        <label for="product_price" class="form-label">
                            Price
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">Rs.</span>

                            <input
                                type="number"
                                id="product_price"
                                name="product_price"
                                step="0.01"
                                min="0"
                                class="form-control"
                                placeholder="Enter price"
                                required
                            >
                        </div>
                    </div>


                    <!-- Quantity -->
                    <div class="col-md-6 mb-4">
                        <label for="product_quantity" class="form-label">
                            Quantity
                        </label>

                        <input
                            type="number"
                            id="product_quantity"
                            name="product_quantity"
                            min="0"
                            class="form-control"
                            placeholder="Enter quantity"
                            required
                        >
                    </div>


                    <!-- Product Image -->
                    <div class="col-md-6 mb-4">
                        <label for="product_image" class="form-label">
                            Product Image
                        </label>

                        <input
                            type="file"
                            id="product_image"
                            name="product_image"
                            class="form-control"
                            accept="image/*"
                            required
                        >

                        <div class="form-text">
                            Upload a clear product image.
                        </div>
                    </div>


                    <!-- Description -->
                    <div class="col-12 mb-4">
                        <label for="product_description" class="form-label">
                            Description
                        </label>

                        <textarea
                            id="product_description"
                            name="product_description"
                            rows="5"
                            class="form-control"
                            placeholder="Enter product description"
                            required
                        ></textarea>
                    </div>

                </div>


                <!-- Buttons -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-1"></i>
                        Save Product
                    </button>

                    <a href="{{ route('admin.view.products') }}" class="btn btn-secondary">
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection