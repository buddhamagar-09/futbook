@include('frontend.tailwindcss')

<body class="min-h-screen bg-slate-950 text-white antialiased">
    <div
        class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.16),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.16),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)]">
        @include('frontend.header')

        <section class="max-w-7xl mx-auto px-6 py-16">

            <h2 class="text-4xl font-bold text-center mb-12">
                Our Products
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($productlist as $product)

                    <div
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300">

                        <!-- Product Image -->
                        <div class="h-72 bg-slate-100 overflow-hidden">
                            <img src="{{ asset('/image/products/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        </div>

                        <!-- Product Info -->
                        <div class="p-5">

                            <h3 class="text-lg font-bold text-gray-800 truncate">
                                {{ $product->name }}
                            </h3>

                            <div class="mt-3 flex items-center justify-between">
                                <span class="text-2xl font-bold text-teal-600">
                                    Rs. {{ $product->price }}
                                </span>

                                <span class="text-sm font-medium text-green-600">
                                    Stock: {{ $product->quantity }}
                                </span>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-5 flex gap-3">

                                <button
                                    class="flex-1 bg-teal-600 text-white py-2.5 rounded-xl font-medium hover:bg-teal-700 transition">
                                    Add to Cart
                                </button>

                                <a href="{{ route('product_details', $product->id) }}"
                                    class="flex-1 border border-teal-600 text-teal-600 py-2.5 rounded-xl font-medium hover:bg-teal-50 transition text-center block">
                                    View Details
                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach
            </div>
        </section>


        </section>

        <footer id="contact" class="border-t border-white/10 py-6 text-center text-sm text-slate-400">
            Futbook ecommerce landing page
        </footer>
    </div>
</body>

</html>