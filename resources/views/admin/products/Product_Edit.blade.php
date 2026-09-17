@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card mt-4">

        <div class="card-header">
            <h4 class="mb-0">Edit Product</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.update.product', $eproduct->id) }}" method="POST" enctype="multipart/form-data">
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
                            value="{{ $eproduct->name }}"
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
                                value="{{ $eproduct->price }}"
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
                            value="{{ $eproduct->quantity }}"
                            class="form-control"
                            placeholder="Enter quantity"
                            required
                        >
                    </div>


                    <!-- Current Image -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label">
                            Current Product Image
                        </label>

                        <div>
                            <img
                                src="{{ asset('image/products/' . $eproduct->image) }}"
                                alt="{{ $eproduct->name }}"
                                style="width: 100px; height: 100px; object-fit: cover;"
                                class="rounded"
                            >
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
                        >{{ $eproduct->description }}</textarea>
                    </div>


                    <!-- New Image -->
                    <div class="col-12 mb-4">

                        <label for="product_image" class="form-label">
                            Change Product Image
                        </label>

                        <input
                            type="file"
                            id="product_image"
                            name="product_image"
                            class="form-control"
                            accept="image/*"
                        >

                        <div class="form-text">
                            Leave this empty if you want to keep the current image.
                        </div>

                    </div>

                </div>


                <!-- Buttons -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-pencil-square me-1"></i>
                        Update Product
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