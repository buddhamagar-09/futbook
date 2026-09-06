@include('frontend.tailwindcss')

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen">

        @include('frontend.header')


        <!-- Products Section -->
        <section class="mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-16">

            <!-- Page Heading -->
            <div class="mb-10 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

                <div>
                    <p class="mb-2 text-sm font-semibold uppercase tracking-wider text-blue-600">
                        Futbook Collection
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                        Our Products
                    </h1>

                    <p class="mt-2 max-w-xl text-sm leading-6 text-slate-500">
                        Explore our latest collection of quality products, carefully selected for you.
                    </p>
                </div>

                <div class="text-sm text-slate-500">
                    {{ count($productlist) }} Products
                </div>

            </div>


            <!-- Products Grid -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($productlist as $product)

                    <!-- Product Card -->
                    <article
                        class="group overflow-hidden border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-slate-300 hover:shadow-lg">


                        <!-- Product Image -->
                        <div class="relative overflow-hidden bg-slate-100">

                            <!-- Discount -->
                            <span
                                class="absolute left-4 top-4 z-10 bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white">
                                -25%
                            </span>


                            <!-- Wishlist -->
                            <button type="button"
                                class="absolute right-4 top-4 z-10 flex h-9 w-9 items-center justify-center bg-white text-slate-600 shadow-sm transition hover:text-red-500">

                                <i class="bi bi-heart"></i>

                            </button>


                            <a href="{{ route('product_details', $product->id) }}">

                                <div class="h-72 overflow-hidden">

                                    <img src="{{ asset('image/products/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                                </div>

                            </a>

                        </div>


                        <!-- Product Information -->
                        <div class="p-5">

                            <!-- Badge -->
                            <div class="mb-3">

                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-600">

                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                    In Stock

                                </span>

                            </div>


                            <!-- Name -->
                            <h2 class="truncate text-lg font-semibold text-slate-900 transition group-hover:text-blue-600">

                                {{ $product->name }}

                            </h2>


                            <!-- Rating -->
                            <div class="mt-2 flex items-center gap-2">

                                <div class="flex gap-0.5 text-sm text-amber-400">

                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>

                                </div>

                                <span class="text-xs text-slate-400">
                                    5.0
                                </span>

                            </div>


                            <!-- Description -->
                            <p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-500">

                                {{ $product->description }}

                            </p>


                            <!-- Price -->
                            <div class="mt-4 flex items-center gap-3">

                                <span class="text-xl font-bold text-slate-900">

                                    Rs {{ number_format($product->price, 2) }}

                                </span>

                                @if($product->original_price)

                                    <span class="text-sm text-slate-400 line-through">

                                        Rs {{ number_format($product->original_price, 2) }}

                                    </span>

                                @endif

                            </div>


                            <!-- Buttons -->
                            <div class="mt-5 grid grid-cols-2 gap-3">

                                <form action="{{ route('addtocart', $product->id) }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="quantity" value="1">

                                    <button type="submit" class="bg-blue-600 px-4 py-2 text-white">
                                        <i class="bi bi-cart-plus"></i>
                                        Add to Cart
                                    </button>
                                </form>


                                <a href="{{ route('product_details', $product->id) }}"
                                    class="flex items-center justify-center gap-2 border border-slate-300 bg-white px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:bg-slate-50">

                                    View Details

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        </section>

        @include('frontend.footer')

    </div>

</body>

</html>