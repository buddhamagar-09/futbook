@include('frontend.tailwindcss')

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen">

        @include('frontend.header')


        <!-- Cart Section -->
        <section class="mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-16">

            <!-- Page Header -->
            <div class="mb-10">

                <p class="mb-2 text-sm font-semibold uppercase tracking-wider text-blue-600">
                    Shopping Bag
                </p>

                <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    Your Shopping Cart
                </h1>

                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                    Review your selected products, update quantities, and continue to checkout.
                </p>

            </div>


            @if($cart->isEmpty())

                <!-- EMPTY CART -->
                <div class="border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">

                    <!-- Icon -->
                    <div class="mx-auto flex h-20 w-20 items-center justify-center bg-blue-50 text-blue-600">
                        <i class="bi bi-cart-x text-4xl"></i>
                    </div>

                    <!-- Message -->
                    <h2 class="mt-6 text-2xl font-bold text-slate-900">
                        Your cart is empty
                    </h2>

                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                        Looks like you haven't added anything to your cart yet.
                        Browse our products and find something you love.
                    </p>

                    <!-- Button -->
                    <a href="{{ route('products') }}"
                        class="mt-7 inline-flex items-center gap-2 bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white transition duration-200 hover:bg-blue-700">
                        <i class="bi bi-bag"></i>
                        Continue Shopping
                    </a>

                </div>


            @else

                <!-- Cart Layout -->
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">


                    <!-- ================================= -->
                    <!-- CART ITEMS -->
                    <!-- ================================= -->

                    <div class="overflow-hidden border border-slate-200 bg-white lg:col-span-2">

                        <!-- Table Header -->
                        <div class="border-b border-slate-200 bg-slate-50 px-6 py-4">

                            <div class="flex items-center justify-between">

                                <h2 class="text-base font-semibold text-slate-900">
                                    Cart Items
                                </h2>

                                <span class="text-sm text-slate-500">
                                    {{ count($cart) }} {{ count($cart) == 1 ? 'Item' : 'Items' }}
                                </span>

                            </div>

                        </div>


                        <!-- Cart Items -->
                        <div class="divide-y divide-slate-200">

                            @php
                                $subtotal = 0;
                            @endphp


                            @foreach($cart as $cartitem)

                                @php
                                    $itemTotal = $cartitem->price * $cartitem->quantity;
                                    $subtotal += $itemTotal;
                                @endphp


                                <!-- Cart Item -->
                                <div class="p-6">

                                    <div class="flex flex-col gap-5 sm:flex-row sm:items-center">


                                        <!-- Image -->
                                        <div class="h-24 w-24 shrink-0 overflow-hidden bg-slate-100">

                                            <img src="{{ asset('image/products/' . $cartitem->image) }}"
                                                alt="{{ $cartitem->name }}" class="h-full w-full object-cover">

                                        </div>


                                        <!-- Product Info -->
                                        <div class="min-w-0 flex-1">

                                            <div class="flex flex-col gap-1">

                                                <span class="text-xs font-medium uppercase tracking-wide text-blue-600">
                                                    Product
                                                </span>

                                                <h3 class="text-base font-semibold text-slate-900">
                                                    {{ $cartitem->name }}
                                                </h3>

                                                <p class="text-sm text-slate-500">
                                                    Rs {{ number_format($cartitem->price, 2) }} per item
                                                </p>

                                            </div>


                                            <!-- Quantity -->
                                         <form action="{{ route('updatecart', $cartitem->id) }}" method="POST" class="mt-4">
                                                @csrf
                                              <div class="mt-4 flex flex-wrap items-center gap-3">

                                                <div class="flex items-center border border-slate-300 bg-white">

                                                    <button onclick="decreaseqty('{{ $cartitem->id }}')" type="button"
                                                        class="flex h-9 w-9 items-center justify-center text-slate-600 transition hover:bg-slate-100">
                                                        <i class="bi bi-dash"></i>
                                                    </button>


                                                    <input type="number" name="quantity" value="{{ $cartitem->quantity }}" min="1" id="qty-{{ $cartitem->id }}"
                                                        class="h-9 w-12 border-x border-slate-300 text-center text-sm font-semibold text-slate-900 outline-none">


                                                    <button onclick="incrementqty( '{{ $cartitem->id }}' )" type="button"
                                                        class="flex h-9 w-9 items-center justify-center text-slate-600 transition hover:bg-slate-100">
                                                        <i class="bi bi-plus"></i>
                                                    </button>

                                                </div>


                                                <button type="submit"
                                                    class="text-xs font-semibold text-blue-600 transition hover:text-blue-700">
                                                    Update
                                                </button>

                                            </div>
                                         </form>

                                        </div>


                                        <!-- Total / Remove -->
                                        <div class="flex items-center justify-between gap-6 sm:flex-col sm:items-end">

                                            <span class="text-lg font-bold text-slate-900">
                                                Rs {{ number_format($itemTotal, 2) }}
                                            </span>


                                            <a href="{{ route('removecart', $cartitem->id) }}"
                                                class="inline-flex items-center gap-1 text-xs font-medium text-red-500 transition hover:text-red-600">

                                                <i class="bi bi-trash3"></i>

                                                Remove

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                        </div>


                        <!-- Continue Shopping -->
                        <div class="border-t border-slate-200 px-6 py-5">

                            <a href="{{ route('products') }}"
                                class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 transition hover:text-blue-600">

                                <i class="bi bi-arrow-left"></i>

                                Continue Shopping

                            </a>

                        </div>

                    </div>



                    <!-- ================================= -->
                    <!-- ORDER SUMMARY -->
                    <!-- ================================= -->

                    @php
                        $deliveryCharge = 150;
                        $total = $subtotal + $deliveryCharge;
                    @endphp


                    <aside class="h-fit border border-slate-200 bg-white">

                        <!-- Header -->
                        <div class="border-b border-slate-200 px-6 py-5">

                            <h2 class="text-lg font-semibold text-slate-900">
                                Order Summary
                            </h2>

                        </div>


                        <div class="space-y-5 p-6">


                            <!-- Subtotal -->
                            <div class="flex items-center justify-between text-sm">

                                <span class="text-slate-500">
                                    Subtotal
                                </span>

                                <span class="font-medium text-slate-900">
                                    Rs {{ number_format($subtotal, 2) }}
                                </span>

                            </div>


                            <!-- Delivery -->
                            <div class="flex items-center justify-between text-sm">

                                <span class="text-slate-500">
                                    Delivery
                                </span>

                                <span class="font-medium text-green-600">
                                    Rs {{ number_format($deliveryCharge, 2) }}
                                </span>

                            </div>


                            <!-- Discount -->
                            <div class="flex items-center justify-between text-sm">

                                <span class="text-slate-500">
                                    Discount
                                </span>

                                <span class="font-medium text-slate-900">
                                    Rs 0.00
                                </span>

                            </div>


                            <!-- Divider -->
                            <div class="border-t border-slate-200"></div>


                            <!-- Grand Total -->
                            <div class="flex items-center justify-between">

                                <span class="font-semibold text-slate-900">
                                    Total
                                </span>

                                <span class="text-2xl font-bold text-blue-600">
                                    Rs {{ number_format($total, 2) }}
                                </span>

                            </div>


                            <!-- Checkout -->
                            <a href="#"
                                class="flex w-full items-center justify-center gap-2 bg-blue-600 px-5 py-3.5 text-sm font-semibold text-white transition duration-200 hover:bg-blue-700">

                                Proceed to Checkout

                                <i class="bi bi-arrow-right"></i>

                            </a>


                            <!-- Security -->
                            <div class="flex items-start gap-3 border-t border-slate-200 pt-5">

                                <i class="bi bi-shield-check mt-0.5 text-lg text-blue-600"></i>

                                <div>

                                    <p class="text-xs font-semibold text-slate-700">
                                        Secure Checkout
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        Your payment and personal information are protected.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </aside>

                </div>

            @endif

        </section>


        @include('frontend.footer')

    </div>

</body>
<script>

        const incrementqty = (id) => {

            let qtyinput = document.getElementById('qty-' + id);
            let currentQty = parseInt(qtyinput.value);
            currentQty++;
            qtyinput.value = currentQty;
        }

        const decreaseqty = (id) => {

            let qtyinput = document.getElementById('qty-' + id);
            let currentQty = parseInt(qtyinput.value);
            if (currentQty > 1) {
                currentQty--;
                qtyinput.value = currentQty;
            }
        }
       

</script>

</html>