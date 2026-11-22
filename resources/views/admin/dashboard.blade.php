@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    {{-- Page Header --}}
    <div class="mb-4">

        <h1 class="h3 mb-1">Dashboard</h1>

        <p class="text-body-secondary mb-0">
            Welcome back. Here's what's happening in your store.
        </p>

    </div>


    {{-- Welcome Banner --}}
    <div class="card dashboard-hero mb-4">

        <div class="card-body d-flex align-items-center gap-3 py-4">

            <div class="dashboard-hero-icon flex-shrink-0">
                <i class="bi bi-speedometer2"></i>
            </div>

            <div>
                <h5 class="mb-1 fw-semibold">
                    Futbook Admin Panel
                </h5>

                <p class="text-body-secondary small mb-0">
                    Manage your products, track orders and keep an eye on your customers — all from one place.
                </p>
            </div>

        </div>

    </div>


    {{-- Quick Links --}}
    <h2 class="h6 text-body-secondary text-uppercase mb-3" style="letter-spacing: .05em;">
        Quick Links
    </h2>

    <div class="row g-3">

        <div class="col-md-4">
            <a href="{{ route('admin.view.products') }}" class="card dashboard-link h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="dashboard-link-icon flex-shrink-0">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div>
                        <div class="fw-semibold">Products</div>
                        <div class="small text-body-secondary">Add and manage your catalogue.</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('admin.view.orders') }}" class="card dashboard-link h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="dashboard-link-icon flex-shrink-0">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                    <div>
                        <div class="fw-semibold">Orders</div>
                        <div class="small text-body-secondary">Review and update order statuses.</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('admin.view.users') }}" class="card dashboard-link h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="dashboard-link-icon flex-shrink-0">
                        <i class="bi bi-people"></i>
                    </div>
                    <div>
                        <div class="fw-semibold">Users</div>
                        <div class="small text-body-secondary">See who's shopping with Futbook.</div>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>

@endsection
