<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">

    {{-- Sidebar Header --}}
    <div class="sidebar-header border-bottom px-3">
        <div class="sidebar-brand">
            <strong>Futbook</strong>
        </div>

        <button
            class="btn-close d-lg-none"
            type="button"
            data-coreui-theme="dark"
            aria-label="Close"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        </button>
    </div>

    {{-- Navigation --}}
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>

        {{-- Dashboard --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8v-10h-8v10zm0-18v6h8V3h-8z"/>
                </svg>
                Dashboard
            </a>
        </li>



        {{-- Products --}}
        <li class="nav-group">

            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M20 6h-4V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2H4a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zM10 4h4v2h-4V4zm10 15H4V8h16v11z"/>
                </svg>
                Products
            </a>

            <ul class="nav-group-items compact">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.products') }}">
                        <span class="nav-icon">
                            <span class="nav-icon-bullet"></span>
                        </span>
                        Add Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.view.products') }}">
                        <span class="nav-icon">
                            <span class="nav-icon-bullet"></span>
                        </span>
                        View Products
                    </a>
                </li>

            </ul>
        </li>

        {{-- Users --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.view.users') }}">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.87 1.97 3.45V19h5v-2.5c0-2.33-3.67-3.5-6-3.5z"/>
                </svg>
                Users
            </a>
        </li>

        {{-- Orders --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.view.orders') }}">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M7 4h10l1 2h3v14H3V6h3l1-2zm1.4 2h7.2l-.5-1h-6.2l-.5 1zM5 8v10h14V8H5zm3 2h8v2H8v-2zm0 4h5v2H8v-2z"/>
                </svg>
                Orders
            </a>
        </li>

    </ul>

    {{-- Sidebar Footer --}}
    <div class="sidebar-footer border-top d-none d-md-flex">
        <button
            class="sidebar-toggler"
            type="button"
            data-coreui-toggle="unfoldable">
        </button>
    </div>

</div>