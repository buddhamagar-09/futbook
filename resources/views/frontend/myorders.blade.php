@include('frontend.tailwindcss')

@include('frontend.header')

<div class="min-h-screen bg-slate-50 px-6 py-10">

    <div class="max-w-6xl mx-auto">

        <!-- Page Header -->
        <div class="mb-8">

            <h1 class="text-2xl font-semibold text-slate-800">
                My Orders
            </h1>

            <p class="text-sm text-slate-500 mt-1">
                View and track your recent orders.
            </p>

        </div>


        @if($orders->isEmpty())

            <!-- EMPTY ORDERS -->
            <div class="border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">

                <!-- Icon -->
                <div class="mx-auto flex h-20 w-20 items-center justify-center bg-blue-50 text-blue-600">
                    <i class="bi bi-box-seam text-4xl"></i>
                </div>

                <!-- Message -->
                <h2 class="mt-6 text-2xl font-bold text-slate-900">
                    No orders yet
                </h2>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                    You haven't placed any orders yet. Browse our products and find something you love.
                </p>

                <!-- Button -->
                <a href="{{ route('products') }}"
                    class="mt-7 inline-flex items-center gap-2 bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white transition duration-200 hover:bg-blue-700">
                    <i class="bi bi-bag"></i>
                    Browse Products
                </a>

            </div>

        @else

        @foreach ($orders as $order)

            <!-- Order -->
            <div class="bg-white border border-slate-200 mb-6">

                <!-- Order Header -->
                <div class="px-5 py-4 border-b border-slate-200
                                        flex flex-col sm:flex-row
                                        sm:items-center sm:justify-between gap-3">

                    <div>

                        <p class="text-sm text-slate-500">
                            Order #{{ $order->id }}
                        </p>

                        <p class="text-sm text-slate-700 mt-1">
                            Placed on {{ $order->created_at->format('F j, Y') }}
                        </p>

                    </div>


                    <!-- Order Status -->
                    <div class="text-sm font-medium">
                        @if ($order->status === 'delivered')
                            <span class="text-green-600">Delivered</span>
                        @elseif ($order->status === 'cancelled')
                            <span class="text-red-600">Cancelled</span>
                        @elseif ($order->status === 'processing')
                            <span class="text-cyan-600">Processing</span>
                        @endif
                    </div>
                  

                </div>


                <!-- Order Body -->
                <div class="p-5">

                    @foreach ($order->Order_items as $item)

                        <!-- Product -->
                        <div class="flex items-center gap-4 py-4
                                                        border-b border-slate-200">

                            <img src="{{ asset('image/products/' . $item->product->image) }}" alt="{{ $item->product->name }}"
                                class="w-20 h-20 object-cover border border-slate-200">

                            <div class="flex-1">

                                <h3 class="font-medium text-slate-800">
                                    {{ $item->product->name }}
                                </h3>

                                <p class="text-sm text-slate-500 mt-1">
                                    Quantity: {{ $item->quantity }}
                                </p>

                                <p class="text-sm text-slate-700 mt-1">
                                    Rs. {{ number_format($item->product->price * $item->quantity, 2) }}
                                </p>

                            </div>

                        </div>

                    @endforeach


                    <!-- Order Footer -->
                    <div class="pt-5
                                            flex flex-col sm:flex-row
                                            sm:items-center sm:justify-between gap-5">

                        <!-- Payment -->
                        <div>

                            <p class="text-sm text-slate-500">
                                Payment
                            </p>

                            <p class="text-sm font-medium text-slate-700 mt-1">
                                {{ strtoupper($order->payment_method) }}
                            </p>

                        </div>


                        <!-- Total -->
                        <div>

                            <p class="text-sm text-slate-500">
                                Total
                            </p>

                            <p class="text-lg font-semibold text-slate-800 mt-1">
                                Rs. {{ number_format($order->total_amount, 2) }}
                            </p>

                        </div>


                        <!-- View Details
                        <a href="{{ route('product_details', $order->id) }}" class="px-4 py-2 text-sm
                                               border border-slate-300
                                               text-slate-700
                                               hover:bg-slate-100
                                               text-center">
                            View Details
                        </a> -->

                    </div>

                </div>

            </div>

        @endforeach

        @endif

    </div>


</div>

@include('frontend.footer')