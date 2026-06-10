<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.home.css')
<body>
    @include('admin.home.header')
    @include('admin.home.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
        </div>
        <div class="max-w-4xl mx-auto">
            <form action="{{ route('admin.update.product',$eproduct->id) }}" method="POST" enctype="multipart/form-data">
                @csrf


                <input type="hidden" name="product_id" value="{{ $eproduct->id }}">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 space-y-8">

                    <!-- Header -->
                    <div>
                        <h2 class="text-2xl font-bold text-white">
                            Add New Product
                        </h2>
                        <p class="text-sm text-gray-500 mt-1">
                            Fill in the product information below.
                        </p>
                    </div>
                        <!-- Product Name -->
                        <div>
                            <label class="block text-sm font-medium text-white mb-2">
                                Product Name
                            </label>

                            <input type="text" name="product_name" placeholder="Nike Air Max 270"
                                value="{{ $eproduct->name }}"
                                class="w-full max-w-xl px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition">
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-medium text-white mb-2">
                                Description
                            </label>
                            <textarea name="product_description" rows="5"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl">{{ $eproduct->description }}</textarea>

                        </div>

                        <!-- Price & Quantity -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 ">

                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    Price
                                </label>

                                <div class="relative">
                                    <span class="absolute left-4 top-3 text-gray-500">
                                        $
                                    </span>

                                    <input type="number" step="0.01" name="product_price" placeholder="0.00"
                                        value="{{ $eproduct->price }}"
                                        class="w-full pl-8 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    Quantity
                                </label>

                                <input type="number" name="product_quantity" placeholder="0"
                                    value="{{ $eproduct->quantity }}"
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white">
                            </div>

                        </div>

                        <!-- Upload -->
                        <div>
                            <label class="block text-sm font-medium text-white mb-3">
                                Product Image
                            </label>
                            @if($eproduct->image)
                                <img height="150" width="150" src="{{ asset('image/products/'.$eproduct->image) }}" alt="">
                            @endif
                            <label for="image"
                                class="flex flex-col items-center justify-center w-full max-w-2xl h-56 border-2 border-dashed border-gray-300 rounded-2xl cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>

                                <p class="text-gray-700 font-medium">
                                    Click to upload image
                                </p>

                                <p class="text-sm text-gray-500 mt-1">
                                    PNG, JPG, WEBP up to 5MB
                                </p>

                                <input type="file" name="product_image" id="product_image" class="bg-gray-800 text-white">
                            </label>
                        </div>
                  
                    <!-- Actions -->
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">

                        <button type="submit"
                            class="px-8 py-3 bg-indigo-600 text-white font-medium rounded-xl hover:bg-indigo-700 transition">
                            Edit Product
                        </button>
                        <a href="{{ route('dashboard') }}"
                            class="px-8 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition">
                            Cancel
                        </a>

                        <button type="reset"
                            class="px-8 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition">
                            Reset
                        </button>

                    </div>

                </div>
            </form>
        </div>

        @include('admin.home.footer')
        @include('admin.home.js')
</body>

</html>