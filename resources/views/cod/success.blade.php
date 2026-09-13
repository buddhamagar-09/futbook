@include('frontend.tailwindcss')

@include('frontend.header')

<main class="min-h-[70vh] bg-slate-50 px-6 py-16">

    <div class="mx-auto flex max-w-2xl items-center justify-center">

        <div class="w-full border border-slate-200 bg-white p-8 text-center shadow-sm sm:p-12">

            <!-- Success Icon -->
            <div class="mx-auto flex h-20 w-20 items-center justify-center bg-green-50 text-green-600">
                <i class="bi bi-check-circle-fill text-5xl"></i>
            </div>


            <!-- Heading -->
            <h1 class="mt-6 text-3xl font-bold tracking-tight text-slate-900">
                Order Placed Successfully
            </h1>

            <p class="mx-auto mt-3 max-w-md text-sm leading-6 text-slate-500">
                Thank you for your order. Your order has been placed successfully
                with Cash on Delivery.
            </p>


            <!-- Order Details -->
            <div class="mt-8 border border-slate-200 bg-slate-50 p-5 text-left">

                <h2 class="mb-4 text-sm font-semibold uppercase tracking-wide text-slate-900">
                    Order Details
                </h2>

                <div class="space-y-3 text-sm">

                    <!-- Order ID -->
                    <div class="flex items-center justify-between gap-4">

                        <span class="text-slate-500">
                            Order ID
                        </span>

                        <span class="font-semibold text-slate-900">
                            #{{ $orderId }}
                        </span>

                    </div>


                    <!-- Transaction ID -->
                    <div class="flex items-center justify-between gap-4">

                        <span class="text-slate-500">
                            Order Reference
                        </span>

                        <span class="max-w-[220px] truncate font-semibold text-slate-900">
                            {{ $transactionId }}
                        </span>

                    </div>


                    <!-- Payment Method -->
                    <div class="flex items-center justify-between gap-4">

                        <span class="text-slate-500">
                            Payment Method
                        </span>

                        <span class="font-medium text-slate-900">
                            Cash on Delivery
                        </span>

                    </div>


                    <!-- Payment Status -->
                    <div class="flex items-center justify-between gap-4">

                        <span class="text-slate-500">
                            Payment Status
                        </span>

                        <span class="font-semibold text-orange-600">
                            <i class="bi bi-clock mr-1"></i>
                            Pending
                        </span>

                    </div>


                    <!-- Order Status -->
                    <div class="flex items-center justify-between gap-4">

                        <span class="text-slate-500">
                            Order Status
                        </span>

                        <span class="font-semibold text-blue-600">
                            <i class="bi bi-box-seam mr-1"></i>
                            Processing
                        </span>

                    </div>


                    <!-- Amount -->
                    <div class="flex items-center justify-between gap-4 border-t border-slate-200 pt-4">

                        <span class="font-medium text-slate-600">
                            Order Amount
                        </span>

                        <span class="text-xl font-bold text-slate-900">
                            Rs {{ number_format($totalamount, 2) }}
                        </span>

                    </div>

                </div>

            </div>


            <!-- COD Information -->
            <div class="mt-6 flex items-start gap-3 border border-blue-100 bg-blue-50 p-4 text-left">

                <i class="bi bi-cash-stack mt-0.5 text-blue-600"></i>

                <p class="text-xs leading-5 text-blue-700">
                    You don't need to make any payment now.
                    Please pay the total amount in cash when your order is delivered.
                </p>

            </div>


            <!-- Buttons -->
            <div class="mt-8 grid gap-3 sm:grid-cols-2">

                <a href="{{ route('products') }}"
                    class="inline-flex items-center justify-center gap-2 bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">

                    <i class="bi bi-bag"></i>

                    Continue Shopping

                </a>


                <a href="{{ route('home') }}"
                    class="inline-flex items-center justify-center gap-2 border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-600 hover:text-blue-600">

                    <i class="bi bi-house"></i>

                    Back to Home

                </a>

            </div>


            <!-- Information -->
            <div class="mt-8 flex items-start gap-3 border-t border-slate-200 pt-6 text-left">

                <i class="bi bi-info-circle mt-0.5 text-blue-600"></i>

                <p class="text-xs leading-5 text-slate-500">
                    Your order is now being processed. Please keep your
                    Order ID <strong>#{{ $orderId }}</strong> for future reference.
                </p>

            </div>

        </div>

    </div>

</main>

@include('frontend.footer')