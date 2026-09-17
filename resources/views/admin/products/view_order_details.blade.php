@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h1 class="h3 mb-1">Order Details</h1>
            <p class="text-body-secondary mb-0">
                View complete information about this order.
            </p>
        </div>


        <!-- USER DETAILS -->
        <div class="card mb-4">

            <div class="card-header">
                <strong>User Details</strong>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table mb-0">
                       
                      
                      

                            <tbody>

                                <tr>
                                    <td class="text-body-secondary" style="width: 30%;">
                                        Customer Name
                                    </td>
                                    <td>
                                        {{ $order->name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Email
                                    </td>
                                    <td>
                                        {{ $order->email }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Phone
                                    </td>
                                    <td>
                                        {{ $order->phone_number }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Shipping Address
                                    </td>
                                    <td>
                                        {{ $order->shipping_address }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Total Amount
                                    </td>
                                    <td>
                                        Rs.{{ $order->total_amount }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Payment Method
                                    </td>
                                    <td>
                                        <span class="badge text-bg-primary">
                                         {{ strtoupper($order->payment_method) }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Payment Status
                                    </td>
                                    <td>
                                        <span class="badge text-bg-warning">
                                           {{ strtoupper($order->payment_status) }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-body-secondary">
                                        Order Status
                                    </td>
                                    <td>
                                        <span class="badge text-bg-info">
                                          {{ strtoupper($order->status) }}
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                     

                    </table>

                </div>

            </div>

        </div>


        <!-- ORDERED PRODUCTS -->
        <div class="card mb-4">

            <div class="card-header">
                <strong>Ordered Products</strong>
            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover mb-0">

                        <thead>

                            <tr>
                                <th>Product ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total Price</th>
                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($order->Order_items as $item)
                            
                            <!-- Product 1 -->
                            <tr>

                                <td>
                                    {{ $item->product->id }}
                                </td>

                                <td>
                                    <img src="{{ asset('image/products/' . $item->product->image) }}" alt="Classic T-Shirt"
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>

                                <td>
                                    {{ $item->product->name }}
                                </td>

                                <td>
                                    Rs.{{ $item->product->price }}
                                </td>

                                <td>
                                    {{ $item->quantity }}
                                </td>

                                <td>
                                    Rs.{{ $item->product->price * $item->quantity }}
                                </td>

                            </tr>
                             @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        @php
            $subtotal = 0;
            foreach ($order->Order_items as $item) {
                $subtotal += $item->product->price * $item->quantity;
            }
            $deliveryCharge = 150; // Assuming a fixed delivery charge
            $totalAmount = $subtotal + $deliveryCharge;
        @endphp
        <!-- ORDER SUMMARY -->
        <div class="card">
            <div class="card-header">
                <strong>Order Summary</strong>
            </div>

            <div class="card-body">

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-body-secondary">
                        Subtotal
                    </span>

                    <strong>
                        Rs. {{ $subtotal }}
                    </strong>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-body-secondary">
                        Delivery Charge
                    </span>

                    <strong>
                        Rs. 150
                    </strong>
                </div>

                <hr>

                <div class="d-flex justify-content-between">

                    <strong>
                        Total
                    </strong>

                    <strong class="text-primary">
                        Rs. {{ $totalAmount }}
                    </strong>

                </div>

            </div>

        </div>

    </div>

@endsection