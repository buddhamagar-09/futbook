@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">

        <!-- Page Header -->
        <div class="mb-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">

            <div>
                <h1 class="h3 mb-1">View Orders</h1>
                <p class="text-body-secondary mb-0">
                    Manage all orders in your store.
                </p>
            </div>

            <!-- Search -->
            <div class="input-group" style="max-width: 300px;">
                <span class="input-group-text">
                    <i class="bi bi-search"></i>
                </span>

                <input type="text" id="orderSearch" class="form-control" placeholder="Search customer or phone...">
            </div>

        </div>


        <!-- Orders Card -->
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Orders</strong>

                <span class="text-body-secondary small">
                    {{ $orderlist->count() }} Orders
                </span>
            </div>


            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0" id="ordersTable">

                        <thead class="">
                            <tr class="align-middle text-nowrap">
                                <th class="ps-3">#</th>
                                <th>Customer</th>
                                <th>Phone</th>
                                <th>Products</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Payment</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th>Details</th>
                                <th class="pe-3">Actions</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($orderlist as $order)

                                <tr>

                                    <!-- Order ID -->
                                    <th scope="row" class="ps-3">
                                        #{{ $order->id }}
                                    </th>


                                    <!-- Customer -->
                                    <td>
                                        <div class="fw-semibold">
                                            {{ $order->name }}
                                        </div>
                                    </td>


                                    <!-- Phone -->
                                    <td>
                                        {{ $order->phone_number }}
                                    </td>


                                    <!-- Products -->
                                    <td>

                                        @foreach ($order->Order_items as $item)

                                            <div class="mb-1">
                                                {{ $item->product->name }}
                                            </div>

                                        @endforeach

                                    </td>


                                    <!-- Quantity -->
                                    <td>

                                        @foreach ($order->Order_items as $item)

                                            <div class="mb-1 text-center">
                                                {{ $item->quantity }}
                                            </div>

                                        @endforeach

                                    </td>


                                    <!-- Total Amount -->
                                    <td class="fw-semibold text-nowrap">
                                        Rs. {{ number_format($order->total_amount, 2) }}
                                    </td>


                                    <!-- Payment Method -->
                                    <td>
                                        <span class="text-uppercase">
                                            {{ $order->payment_method }}
                                        </span>
                                    </td>


                                    <td>
                                        @if ($order->payment_status === 'paid')
                                            <span class="text-success">Paid</span>
                                        @elseif ($order->payment_status === 'failed')
                                            <span class="text-danger">Failed</span>
                                        @else
                                            <span class="text-body-secondary">Pending</span>
                                        @endif
                                    </td>


                                    <!-- Order Status -->
                                    <td>
                                        @if ($order->status === 'delivered')
                                            <span class="text-success">Delivered</span>
                                        @elseif ($order->status === 'cancelled')
                                            <span class="text-danger">Cancelled</span>
                                        @elseif ($order->status === 'processing')
                                            <span class="text-primary">Processing</span>
                                        @endif
                                    </td>


                                    <!-- Details -->
                                    <td>

                                        <a href="{{ route('admin.view_orderdetails', $order->id) }}"
                                            class="btn btn-primary btn-sm text-nowrap">
                                            <i class="bi bi-eye me-1"></i>
                                            View
                                        </a>

                                    </td>


                                    <!-- Actions -->
                                    <td class="pe-3">

                                        @if ($order->status === 'processing')

                                            <div class="d-flex gap-1">

                                                <!-- Complete -->
                                                <form action="{{ route('admin.update_orderstatus', $order->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')

                                                    <button type="submit" class="btn btn-outline-primary btn-sm">
                                                        <!-- <i class="bi bi-check-lg me-1"></i> -->
                                                        Complete
                                                    </button>
                                                </form>

                                                <!-- Cancel -->
                                                <form action="{{ route('admin.cancel_order', $order->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to cancel this order?')">
                                                    @csrf
                                                    @method('PATCH')

                                                    <button type="submit" class="btn btn-outline-secondary btn-sm">
                                                        <!-- <i class="bi bi-x-lg me-1"></i> -->
                                                        Cancel
                                                    </button>
                                                </form>

                                            </div>

                                        @else

                                            <span class="text-body-secondary">
                                                —
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


    </div>

    <!-- Search -->

    <script>

        document.getElementById('orderSearch').addEventListener('keyup', function () {

            let search = this.value.toLowerCase();

            let rows = document.querySelectorAll('#ordersTable tbody tr');

            rows.forEach(function (row) {

                let customer = row.cells[1].textContent.toLowerCase();
                let phone = row.cells[2].textContent.toLowerCase();

                if (
                    customer.includes(search) ||
                    phone.includes(search)
                ) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }

            });

        });

    </script>

@endsection