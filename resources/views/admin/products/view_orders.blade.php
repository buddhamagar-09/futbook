@extends('admin.layouts.app')

@section('content')

<div class="mb-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">

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

        <input
            type="text"
            id="orderSearch"
            class="form-control"
            placeholder="Search orders..."
        >
    </div>

</div>


<div class="card">

    <div class="card-header">
        <strong>Orders</strong>
    </div>

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover mb-0" id="ordersTable">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Items</th>
                        <th>Total Amount</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($orderlist as $order)

                        <tr>

                            <!-- Order ID -->
                            <th scope="row">
                                {{ $order->id }}
                            </th>


                            <!-- Customer -->
                            <td>
                                {{ $order->name }}
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


                            <!-- Items -->
                            <td>

                                @foreach ($order->Order_items as $item)

                                    <div class="mb-1">
                                        {{ $item->quantity }}
                                    </div>

                                @endforeach

                            </td>


                            <!-- Total Amount -->
                            <td>
                                Rs. {{ $order->total_amount }}
                            </td>


                            <!-- Payment Method -->
                            <td>
                                {{ strtoupper($order->payment_method) }}
                            </td>


                            <!-- Payment Status -->
                            <td>

                                @if ($order->payment_status === 'paid')

                                    <span class="badge text-bg-success">
                                        Paid
                                    </span>

                                @elseif ($order->payment_status === 'failed')

                                    <span class="badge text-bg-danger">
                                        Failed
                                    </span>

                                @else

                                    <span class="badge text-bg-warning">
                                        Pending
                                    </span>

                                @endif

                            </td>


                            <!-- Order Status -->
                            <td>

                                @if ($order->status === 'delivered')

                                    <span class="badge text-bg-success">
                                        Delivered
                                    </span>

                                @elseif ($order->status === 'cancelled')

                                    <span class="badge text-bg-danger">
                                        Cancelled
                                    </span>

                                @elseif ($order->status === 'shipped')

                                    <span class="badge text-bg-info">
                                        Shipped
                                    </span>

                                @elseif ($order->status === 'processing')

                                    <span class="badge text-bg-primary">
                                        Processing
                                    </span>

                                @else

                                    <span class="badge text-bg-warning">
                                        Pending
                                    </span>

                                @endif

                            </td>


                            <!-- Actions -->
                            <td>
                                <a
                                    href="{{ route('admin.view_orderdetails', $order->id) }}"
                                    class="btn btn-primary btn-sm"
                                >
                                    View Details
                                </a>

                                <a href="" 
                                class="btn btn-primary btn-sm"
                                >Complete</a>
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>


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