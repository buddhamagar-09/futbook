@include('frontend.tailwindcss')

@include('frontend.header')


<div class="min-h-screen bg-slate-50">

    <!-- Page Header -->
    <section class="border-b border-slate-200 bg-white">
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <a href="{{ route('cartpage') }}" class="transition hover:text-blue-600">
                    Cart
                </a>

                <i class="bi bi-chevron-right text-xs"></i>

                <span class="font-medium text-slate-900">
                    Checkout
                </span>
            </div>


            <!-- Heading -->
            <div class="mt-4">
                <h1 class="text-3xl font-bold tracking-tight text-slate-900">
                    Checkout
                </h1>

                <p class="mt-2 text-sm text-slate-500">
                    Complete your information to place your order.
                </p>
            </div>

        </div>
    </section>



    <!-- Checkout Content -->
    <section class="py-10">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">


                <!-- ================================= -->
                <!-- LEFT SIDE -->
                <!-- ================================= -->

                <div class="space-y-6 lg:col-span-2">


                    <!-- Customer Information -->
                    <div class="border border-slate-200 bg-white">

                        <!-- Header -->
                        <div class="border-b border-slate-200 px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center bg-blue-50 text-blue-600">
                                    <i class="bi bi-person text-lg"></i>
                                </div>

                                <div>
                                    <h2 class="text-lg font-bold text-slate-900">
                                        Customer Information
                                    </h2>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Enter your contact details.
                                    </p>
                                </div>

                            </div>

                        </div>


                        <!-- Form -->
                        <div class="p-6">

                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">


                                <!-- Full Name -->
                                <div>

                                    <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Full Name
                                    </label>

                                    <input type="text" id="name" placeholder="Enter your full name"
                                        value="{{ Auth::user()->name }}"
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                                </div>


                                <!-- Email -->
                                <div>

                                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Email Address
                                    </label>

                                    <input type="email" id="email" placeholder="Enter your email address"
                                        value="{{ Auth::user()->email}}"
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                                </div>


                                <!-- Phone -->
                                <div>

                                    <label for="phone" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Phone Number
                                    </label>

                                    <input type="text" id="phone" placeholder="Enter your phone number"
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                                </div>


                                <!-- City -->
                                <div>

                                    <label for="city" class="mb-2 block text-sm font-semibold text-slate-700">
                                        City
                                    </label>

                                    <input type="text" id="city" placeholder="Enter your city"
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                                </div>


                                <!-- Address -->
                                <div class="sm:col-span-2">

                                    <label for="address" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Delivery Address
                                    </label>

                                    <textarea id="address" rows="3" placeholder="Enter your complete delivery address"
                                        class="w-full resize-none border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></textarea>

                                </div>


                                <!-- Order Note -->
                                <div class="sm:col-span-2">

                                    <label for="order_note" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Order Note
                                        <span class="font-normal text-slate-400">
                                            (Optional)
                                        </span>
                                    </label>

                                    <textarea id="order_note" rows="3"
                                        placeholder="Any special instructions for your order?"
                                        class="w-full resize-none border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></textarea>

                                </div>


                            </div>

                        </div>

                    </div>



                    <!-- Payment Method -->
                    <div class="border border-slate-200 bg-white">

                        <!-- Header -->
                        <div class="border-b border-slate-200 px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center bg-blue-50 text-blue-600">
                                    <i class="bi bi-credit-card text-lg"></i>
                                </div>

                                <div>
                                    <h2 class="text-lg font-bold text-slate-900">
                                        Payment Method
                                    </h2>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Choose your preferred payment method.
                                    </p>
                                </div>

                            </div>

                        </div>


                        <!-- Payment Options -->
                        <div class="p-6">

                            <div class="space-y-3">


                                <!-- Cash on Delivery -->
                                <label
                                    class="flex cursor-pointer items-start gap-4 border border-blue-200 bg-blue-50 p-4">

                                    <input type="radio" name="payment" value="cod" checked
                                        class="mt-1 h-4 w-4 accent-blue-600">

                                    <div class="flex-1">

                                        <div class="flex items-center gap-3">

                                            <i class="bi bi-cash-stack text-xl text-blue-600"></i>

                                            <div>

                                                <p class="text-sm font-bold text-slate-900">
                                                    Cash on Delivery
                                                </p>

                                                <p class="mt-1 text-xs text-slate-500">
                                                    Pay when your order is delivered.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </label>


                                <!-- eSewa -->
                                <label
                                    class="flex cursor-pointer items-start gap-4 border border-slate-200 bg-white p-4 transition hover:border-blue-200 hover:bg-slate-50">

                                    <input type="radio" name="payment" value="esewa"
                                        class="mt-1 h-4 w-4 accent-blue-600">

                                    <div class="flex-1">

                                        <div class="flex items-center gap-3">

                                            <div class="flex h-8 w-8 items-center justify-center bg-green-50">
                                                <span class="text-xs font-bold text-green-600">
                                                    eSewa
                                                </span>
                                            </div>

                                            <div>

                                                <p class="text-sm font-bold text-slate-900">
                                                    eSewa
                                                </p>

                                                <p class="mt-1 text-xs text-slate-500">
                                                    Pay securely using your eSewa account.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </label>


                            </div>

                        </div>

                    </div>



                </div>



                <!-- ================================= -->
                <!-- RIGHT SIDE -->
                <!-- ================================= -->

                <div class="lg:col-span-1">


                    <!-- Order Summary -->
                    <div class="sticky top-24 border border-slate-200 bg-white">


                        <!-- Header -->
                        <div class="border-b border-slate-200 px-6 py-5">

                            <h2 class="text-lg font-bold text-slate-900">
                                Order Summary
                            </h2>

                            <p class="mt-1 text-xs text-slate-500">
                                Review your order before placing it.
                            </p>

                        </div>


                        @foreach ($cart as $item)

                            <!-- Products -->
                            <div class="divide-y divide-slate-100">


                                <!-- Product 1 -->
                                <div class="flex gap-4 p-5">

                                    <div class="h-16 w-16 shrink-0 overflow-hidden bg-slate-100">

                                        <img src="{{ asset('image/products/' . $item->image) }}" alt="Football"
                                            class="h-full w-full object-cover">

                                    </div>


                                    <div class="min-w-0 flex-1">

                                        <h3 class="truncate text-sm font-semibold text-slate-900">
                                            {{ $item->name }}
                                        </h3>

                                        <p class="mt-1 text-xs text-slate-500">
                                            Qty: {{ $item->quantity }}
                                        </p>

                                        <p class="mt-2 text-sm font-bold text-blue-600">
                                            Rs. {{ number_format($item->price * $item->quantity, 2) }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        @endforeach




                        @php

                            $totalprice = 0;
                            $deliveryCharge = 150; // Fixed delivery charge
                            foreach ($cart as $item) {
                                $totalprice += $item->price * $item->quantity;
                            }

                            $grandTotal = $totalprice + $deliveryCharge;
                        @endphp
                        <!-- Price Summary -->
                        <div class="border-t border-slate-200 p-6">

                            <div class="space-y-3">


                                <!-- Subtotal -->
                                <div class="flex items-center justify-between text-sm">

                                    <span class="text-slate-500">
                                        Subtotal
                                    </span>

                                    <span class="font-medium text-slate-900">
                                        {{ number_format($totalprice, 2) }}
                                    </span>

                                </div>


                                <!-- Delivery -->
                                <div class="flex items-center justify-between text-sm">

                                    <span class="text-slate-500">
                                        Delivery
                                    </span>

                                    <span class="font-medium text-slate-900">
                                        Rs. {{ number_format($deliveryCharge, 2) }}
                                    </span>

                                </div>


                                <!-- Discount -->
                                <div class="flex items-center justify-between text-sm">

                                    <span class="text-slate-500">
                                        Discount
                                    </span>

                                    <span class="font-medium text-green-600">
                                        - Rs. 0.00
                                    </span>

                                </div>


                                <!-- Total -->
                                <div class="border-t border-slate-200 pt-4">

                                    <div class="flex items-center justify-between">

                                        <span class="text-base font-bold text-slate-900">
                                            Total
                                        </span>

                                        <span class="text-xl font-bold text-blue-600">
                                            Rs. {{ number_format($grandTotal, 2) }}
                                        </span>

                                    </div>

                                </div>


                            </div>



                            <!-- Place Order -->
                            <button type="button" id="placeorderbtn"
                                class="mt-6 flex w-full items-center justify-center gap-2 bg-blue-600 px-5 py-3.5 text-sm font-bold text-white transition hover:bg-blue-700">
                                <i class="bi bi-check2-circle"></i>
                                Place Order
                            </button>


                            <!-- Back to Cart -->
                            <a href="{{ route('cartpage') }}"
                                class="mt-3 flex w-full items-center justify-center gap-2 border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                                <i class="bi bi-arrow-left"></i>
                                Back to Cart
                            </a>



                            <!-- Security -->
                            <div class="mt-5 flex items-start gap-3 border-t border-slate-100 pt-5">

                                <i class="bi bi-shield-check text-lg text-green-600"></i>

                                <p class="text-xs leading-5 text-slate-500">
                                    Your information is securely handled and will only be used to process your order.
                                </p>

                            </div>


                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>

</div>

<script>

    document.getElementById('placeorderbtn').addEventListener('click', () => {

        const selectedpayment = document.querySelector('input[name="payment"]:checked').value;


        if (selectedpayment === 'esewa') {
            // console.log('eSewa payment selected');
            window.location.href = "{{ route('esewa.initiatepayment') }}";


        } else if (selectedpayment === 'cod') {
            // console.log('Cash on Delivery selected');
            if (confirm('Are you sure you want to place the order with Cash on Delivery?')) {
                window.location.href = "{{ route('cod.placeorder') }}";
            }
            else {
                // User canceled the confirmation dialog
                window.localStorage.removeItem('codConfailure');
            }


        }
    });

</script>


@include('frontend.footer')