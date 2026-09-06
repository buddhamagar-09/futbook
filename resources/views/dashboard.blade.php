@include('frontend.tailwindcss')
@php
    $products = App\Models\Product::latest()->take(3)->get();
@endphp

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen bg-slate-50">
        @include('frontend.header')


        <main class="mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-20">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-20">


                <!-- LEFT CONTENT -->
                <section>

                    <!-- Small Label -->
                    <div class="mb-6 inline-flex items-center gap-2 border border-blue-100 bg-blue-50 px-3 py-1.5">

                        <span class="h-2 w-2 rounded-full bg-blue-600"></span>

                        <span class="text-xs font-semibold uppercase tracking-wider text-blue-600">
                            New Season Collection
                        </span>

                    </div>


                    <!-- Heading -->
                    <h1
                        class="max-w-2xl text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">

                        Discover your
                        <span class="text-blue-600">
                            perfect style.
                        </span>

                    </h1>


                    <!-- Description -->
                    <p class="mt-6 max-w-xl text-base leading-7 text-slate-500 sm:text-lg">

                        Explore our latest collection of quality products designed
                        to bring style, comfort, and value to your everyday life.

                    </p>


                    <!-- Buttons -->
                    <div class="mt-8 flex flex-wrap gap-3">

                        <a href="#collections"
                            class="inline-flex items-center gap-2 bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white transition duration-200 hover:bg-blue-700">

                            Shop Collection

                            <i class="bi bi-arrow-right"></i>

                        </a>


                        <a href="#contact"
                            class="inline-flex items-center gap-2 border border-slate-300 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 transition duration-200 hover:border-slate-400 hover:bg-slate-50">

                            Contact Us

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>


                    <!-- Features -->
                    <div id="collections" class="mt-12 grid grid-cols-1 border-y border-slate-200 sm:grid-cols-3">

                        <!-- Feature 1 -->
                        <div class="border-b border-slate-200 py-5 sm:border-b-0 sm:border-r sm:px-5">

                            <div class="mb-3 flex h-9 w-9 items-center justify-center bg-blue-50 text-blue-600">

                                <i class="bi bi-truck text-lg"></i>

                            </div>

                            <p class="text-sm font-semibold text-slate-900">
                                Fast Delivery
                            </p>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Quick and reliable shipping
                            </p>

                        </div>


                        <!-- Feature 2 -->
                        <div class="border-b border-slate-200 py-5 sm:border-b-0 sm:border-r sm:px-5">

                            <div class="mb-3 flex h-9 w-9 items-center justify-center bg-blue-50 text-blue-600">

                                <i class="bi bi-stars text-lg"></i>

                            </div>

                            <p class="text-sm font-semibold text-slate-900">
                                Fresh Arrivals
                            </p>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                New products added regularly
                            </p>

                        </div>


                        <!-- Feature 3 -->
                        <div class="py-5 sm:px-5">

                            <div class="mb-3 flex h-9 w-9 items-center justify-center bg-blue-50 text-blue-600">

                                <i class="bi bi-shield-check text-lg"></i>

                            </div>

                            <p class="text-sm font-semibold text-slate-900">
                                Secure Shopping
                            </p>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Safe and protected checkout
                            </p>

                        </div>

                    </div>

                </section>




                <!-- RIGHT FEATURED PRODUCT -->
                <section id="featured">

                    @php
                        $featuredProduct = $products->first();
                    @endphp

                    @if ($featuredProduct)

                        <div class="border border-slate-200 bg-white p-4 shadow-sm">

                            <!-- Image -->
                            <div class="relative overflow-hidden bg-slate-100">

                                <!-- Discount -->
                                <div
                                    class="absolute left-5 top-5 z-10 bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white">
                                    -25%
                                </div>

                                <div class="h-[420px] overflow-hidden sm:h-[480px]">

                                    <img src="{{ asset('image/products/' . $featuredProduct->image) }}"
                                        alt="{{ $featuredProduct->name }}"
                                        class="h-full w-full object-cover transition duration-500 hover:scale-105" />

                                </div>

                            </div>


                            <!-- Product Info -->
                            <div class="p-5">

                                <div class="flex items-start justify-between gap-4">

                                    <div>

                                        <p class="text-xs font-semibold uppercase tracking-wider text-blue-600">
                                            Featured Product
                                        </p>

                                        <h2 class="mt-1 text-2xl font-bold text-slate-900">
                                            {{ $featuredProduct->name }}
                                        </h2>

                                    </div>


                                    <!-- Rating -->
                                    <div class="flex items-center gap-1 text-sm text-amber-400">

                                        <i class="bi bi-star-fill"></i>

                                        <span class="ml-1 text-xs font-medium text-slate-500">
                                            5.0
                                        </span>

                                    </div>

                                </div>


                                <!-- Price -->
                                <div class="mt-4 flex items-center justify-between">

                                    <span class="text-2xl font-bold text-slate-900">
                                        Rs {{ number_format($featuredProduct->price, 2) }}
                                    </span>

                                    <span class="text-sm text-slate-400 line-through">
                                        Rs {{ number_format($featuredProduct->price * 1.33, 2) }}
                                    </span>

                                </div>


                                <!-- Description -->
                                <p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-500">
                                    {{ $featuredProduct->description }}
                                </p>


                                <!-- CTA -->
                                <div class="mt-5 flex gap-3">

                                    <a href="{{ route('product_details', $featuredProduct->id) }}"
                                        class="flex flex-1 items-center justify-center gap-2 bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">

                                        View Product

                                        <i class="bi bi-arrow-right"></i>

                                    </a>


                                    <a href="{{ route('login') }}"
                                        class="flex h-11 w-11 items-center justify-center border border-slate-300 text-slate-700 transition hover:border-blue-500 hover:bg-blue-50 hover:text-blue-600"
                                        aria-label="Login">

                                        <i class="bi bi-person"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    @endif

                </section>



            </div>

        </main>
        <!-- Products Section -->
        <section id="products" class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <!-- Section Header -->
            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                <div>
                    <span
                        class="inline-flex items-center gap-2 border border-blue-100 bg-blue-50 px-3 py-1.5 text-xs font-semibold uppercase tracking-wide text-blue-600">
                        <i class="bi bi-grid"></i>
                        Shop the collection
                    </span>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                        Popular products
                    </h2>

                    <p class="mt-3 max-w-2xl text-base leading-7 text-slate-500">
                        Explore some of our most popular styles, selected for quality,
                        comfort, and everyday fashion.
                    </p>
                </div>

                <a href="{{ route('products') }}"
                    class="inline-flex w-fit items-center gap-2 border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-blue-600 hover:bg-blue-600 hover:text-white">

                    View all products
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>


            <!-- Products Grid -->
            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($products as $product)

                    <!-- Product Card -->
                    <article
                        class="group overflow-hidden border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-slate-300 hover:shadow-lg">

                        <!-- Product Image -->
                        <div class="relative aspect-[4/3] overflow-hidden bg-slate-100">

                            <img src="{{ asset('image/products/' . $product->image) }}" alt="{{ $product->name }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />

                            <!-- Discount Badge -->
                            <span class="absolute left-4 top-4 bg-blue-600 px-3 py-1.5 text-xs font-bold text-white">
                                -25%
                            </span>

                            <!-- Wishlist -->
                            <button type="button"
                                class="absolute right-4 top-4 flex h-9 w-9 items-center justify-center border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:bg-blue-600 hover:text-white"
                                aria-label="Add to wishlist">

                                <i class="bi bi-heart"></i>

                            </button>

                        </div>


                        <!-- Product Content -->
                        <div class="p-5">

                            <!-- Category / Badge -->
                            <div class="flex items-center justify-between gap-3">

                                <span class="text-xs font-semibold uppercase tracking-wide text-blue-600">
                                    Best Seller
                                </span>

                                <div class="flex items-center gap-1 text-sm text-amber-500">
                                    <i class="bi bi-star-fill"></i>
                                    <span class="font-medium text-slate-600">4.8</span>
                                </div>

                            </div>


                            <!-- Product Name -->
                            <h3 class="mt-3 truncate text-lg font-semibold text-slate-900">
                                {{ $product->name }}
                            </h3>


                            <!-- Description -->
                            <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500">
                                {{ $product->description }}
                            </p>


                            <!-- Price -->
                            <div class="mt-4 flex items-center gap-3">

                                <span class="text-2xl font-bold text-slate-900">
                                    Rs {{ number_format($product->price, 2) }}
                                </span>

                                <span class="text-sm text-slate-400 line-through">
                                    Rs {{ number_format($product->original_price, 2) }}
                                </span>

                            </div>


                            <!-- Stock -->
                            <div class="mt-3 flex items-center gap-2 text-sm">

                                <span class="h-2 w-2 bg-emerald-500"></span>

                                <span class="text-slate-500">
                                    In stock
                                </span>

                            </div>


                            <!-- Actions -->
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
                                    class="inline-flex items-center justify-center gap-2 border border-slate-300 bg-white px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-600 hover:text-blue-600">

                                    View details
                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        </section>

        <!-- Features Section -->
        <section id="features" class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <!-- Section Header -->
            <div class="max-w-3xl">

                <span
                    class="inline-flex items-center gap-2 border border-blue-100 bg-blue-50 px-3 py-1.5 text-xs font-semibold uppercase tracking-wide text-blue-600">
                    <i class="bi bi-stars"></i>
                    Why shop with us
                </span>

                <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    Everything you need for a better shopping experience
                </h2>

                <p class="mt-3 text-base leading-7 text-slate-500">
                    From discovering new styles to receiving your order,
                    Futbook is designed to make every step simple and convenient.
                </p>

            </div>


            <!-- Features Grid -->
            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Feature 1 -->
                <div
                    class="group border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                    <div
                        class="flex h-12 w-12 items-center justify-center bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                        <i class="bi bi-truck"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-slate-900">
                        Fast delivery
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Quick and reliable shipping options so your favorite
                        products reach you right on time.
                    </p>

                </div>


                <!-- Feature 2 -->
                <div
                    class="group border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                    <div
                        class="flex h-12 w-12 items-center justify-center bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-slate-900">
                        Fresh arrivals
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Discover new styles and products regularly to keep
                        your wardrobe fresh and up to date.
                    </p>

                </div>


                <!-- Feature 3 -->
                <div
                    class="group border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                    <div
                        class="flex h-12 w-12 items-center justify-center bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-slate-900">
                        Secure shopping
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Your account and shopping experience are protected
                        with secure authentication and trusted checkout.
                    </p>

                </div>


                <!-- Feature 4 -->
                <div
                    class="group border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                    <div
                        class="flex h-12 w-12 items-center justify-center bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                        <i class="bi bi-cart-check"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-slate-900">
                        Easy checkout
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        A straightforward shopping and checkout process
                        without unnecessary steps or complications.
                    </p>

                </div>


                <!-- Feature 5 -->
                <div
                    class="group border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                    <div
                        class="flex h-12 w-12 items-center justify-center bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                        <i class="bi bi-patch-check"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-slate-900">
                        Quality products
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Carefully selected products that combine quality,
                        comfort, and modern everyday style.
                    </p>

                </div>


                <!-- Feature 6 -->
                <div
                    class="group border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-md">

                    <div
                        class="flex h-12 w-12 items-center justify-center bg-blue-50 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                        <i class="bi bi-headset"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-slate-900">
                        Customer support
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Get help with orders, products, returns, and other
                        questions whenever you need assistance.
                    </p>

                </div>

            </div>

        </section>

        @include('frontend.footer')
    </div>
</body>

</html>