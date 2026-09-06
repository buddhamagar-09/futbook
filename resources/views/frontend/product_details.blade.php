@include('frontend.tailwindcss')

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen">

        @include('frontend.header')


        <!-- Product Details -->
        <section class="mx-auto max-w-7xl px-6 py-10 lg:px-8 lg:py-14">

            <!-- Back -->
            <div class="mb-8">
                <a href="{{ route('products') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-blue-600">

                    <i class="bi bi-arrow-left"></i>

                    Back to products
                </a>
            </div>


            <!-- Product Layout -->
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 lg:gap-16">


                <!-- PRODUCT IMAGE -->
                <div>

                    <div class="overflow-hidden border border-slate-200 bg-white shadow-sm">

                        <div class="aspect-square overflow-hidden bg-slate-100">

                            <img
                                src="{{ asset('image/products/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="h-full w-full object-cover transition duration-500 hover:scale-105"
                            >

                        </div>

                    </div>


                    <!-- Small Info -->
                    <div class="mt-5 grid grid-cols-2 gap-4">

                        <div class="border border-slate-200 bg-white p-4">
                            <div class="mb-2 flex h-9 w-9 items-center justify-center bg-blue-50 text-blue-600">
                                <i class="bi bi-shield-check text-lg"></i>
                            </div>

                            <p class="text-sm font-semibold text-slate-900">
                                Secure Payment
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Safe & trusted checkout
                            </p>
                        </div>


                        <div class="border border-slate-200 bg-white p-4">
                            <div class="mb-2 flex h-9 w-9 items-center justify-center bg-blue-50 text-blue-600">
                                <i class="bi bi-truck text-lg"></i>
                            </div>

                            <p class="text-sm font-semibold text-slate-900">
                                Fast Delivery
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Quick delivery to your door
                            </p>
                        </div>

                    </div>

                </div>



                <!-- PRODUCT INFORMATION -->
                <div class="flex flex-col justify-center">

                    <!-- Category -->
                    <span
                        class="mb-4 inline-flex w-fit items-center border border-blue-100 bg-blue-50 px-3 py-1.5 text-xs font-semibold uppercase tracking-wide text-blue-600">

                        Product Details

                    </span>


                    <!-- Product Name -->
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">

                        {{ $product->name }}

                    </h1>


                    <!-- Rating -->
                    <div class="mt-4 flex items-center gap-3">

                        <div class="flex items-center gap-1 text-amber-400">

                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </div>

                        <span class="text-sm text-slate-500">
                            5.0 rating
                        </span>

                    </div>


                    <!-- Price -->
                    <div class="mt-7">

                        <span class="text-3xl font-bold text-slate-900 sm:text-4xl">

                            Rs {{ number_format($product->price, 2) }}

                        </span>

                    </div>


                    <!-- Description -->
                    <div class="mt-7 border-t border-slate-200 pt-7">

                        <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-900">
                            Description
                        </h2>

                        <p class="text-base leading-7 text-slate-600">

                            {{ $product->description }}

                        </p>

                    </div>


                    <!-- Product Features -->
                    <div class="mt-7 grid grid-cols-1 gap-3 sm:grid-cols-2">

                        <div class="flex items-center gap-3 text-sm text-slate-600">

                            <i class="bi bi-check-circle-fill text-blue-600"></i>

                            Premium Quality

                        </div>


                        <div class="flex items-center gap-3 text-sm text-slate-600">

                            <i class="bi bi-check-circle-fill text-blue-600"></i>

                            Easy 7-day Return

                        </div>


                        <div class="flex items-center gap-3 text-sm text-slate-600">

                            <i class="bi bi-check-circle-fill text-blue-600"></i>

                            Secure Checkout

                        </div>


                        <div class="flex items-center gap-3 text-sm text-slate-600">

                            <i class="bi bi-check-circle-fill text-blue-600"></i>

                            Fast Delivery

                        </div>

                    </div>


                    <!-- Stock -->
                    <div class="mt-7 flex items-center gap-4 border-y border-slate-200 py-5">

                        <div class="flex items-center gap-2">

                            <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>

                            <span class="text-sm font-semibold text-green-600">
                                In Stock
                            </span>

                        </div>

                        <span class="text-sm text-slate-500">
                            {{ $product->quantity }} items available
                        </span>

                    </div>

                  
                    <!-- FORM -->
                    <form action="{{ route('addtocart', $product->id) }}" method="post" class="mt-7">
                        @csrf
                        <!-- Quantity -->
                        <div class="mb-5">

                            <label
                                for="quantity"
                                class="mb-2 block text-sm font-semibold text-slate-900">

                                Quantity

                            </label>

                            <div class="flex w-fit items-center border border-slate-300 bg-white">

                                <button
                                    type="button"
                                    class="flex h-11 w-11 items-center justify-center text-slate-600 transition hover:bg-slate-100">

                                    <i class="bi bi-dash"></i>

                                </button>


                                <input
                                    id="quantity"
                                    type="number"
                                    value="1"
                                    min="1"
                                    name="quantity"
                                    max="{{ $product->quantity }}"
                                    class="h-11 w-16 border-x border-slate-300 text-center text-sm font-semibold text-slate-900 outline-none focus:border-blue-500"
                                >


                                <button
                                    type="button"
                                    class="flex h-11 w-11 items-center justify-center text-slate-600 transition hover:bg-slate-100">

                                    <i class="bi bi-plus"></i>

                                </button>

                            </div>

                        </div>


                        <!-- Buttons -->
                        <div class="flex flex-col gap-3 sm:flex-row">
                                <button type="submit" class="flex flex-1 items-center justify-center gap-2 bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white transition duration-200 hover:bg-blue-700">
                                    <i class="bi bi-cart-plus"></i>
                                    Add to Cart
                                </button>

                        <a
                                href="{{ route('products') }}"
                                class="flex flex-1 items-center justify-center gap-2 border border-slate-300 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 transition duration-200 hover:border-slate-400 hover:bg-slate-50">
                                Continue Shopping
                            </a>
                        </div>
                    </form>

                </div>

            </div>

        </section>


        @include('frontend.footer')

    </div>

</body>

</html>