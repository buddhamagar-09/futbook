
<header class="sticky top-0 z-50 border-b border-slate-200 bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between gap-6">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex shrink-0 items-center gap-3">

                <div
                    class="flex h-10 w-10 items-center justify-center bg-slate-900 text-lg font-bold text-white transition hover:bg-blue-600">
                    F
                </div>

                <div class="hidden leading-tight sm:flex sm:flex-col">
                    <span class="text-xl font-bold tracking-tight text-slate-900">
                        Futbook
                    </span>

                    <span class="text-xs text-slate-500">
                        Future Shopping
                    </span>
                </div>

            </a>


            <!-- Desktop Navigation -->
            <nav class="hidden items-center gap-7 text-sm font-medium text-slate-600 lg:flex">

                <a href="{{ url('/') }}"
                    class="transition duration-200 hover:text-blue-600">
                    Home
                </a>

                <a href="{{ route('products') }}"
                    class="transition duration-200 hover:text-blue-600">
                    Products
                </a>

                <a href="{{ url('/') }}#products"
                    class="transition duration-200 hover:text-blue-600">
                    New Arrivals
                </a>

                <a href="{{ route('contact') }}"
                    class="transition duration-200 hover:text-blue-600">
                    Contact
                </a>

            </nav>


            <!-- Search -->
            <div class="hidden flex-1 justify-center lg:flex">
                <form action="{{ route('products') }}" method="GET" class="w-full max-w-md">

                    <div class="relative">

                        <i
                            class="bi bi-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                        </i>

                        <input
                            type="search"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search products..."
                            class="w-full border border-slate-300 bg-slate-50 py-2.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:bg-white focus:ring-1 focus:ring-blue-600"
                        />

                    </div>

                </form>
            </div>


            <!-- Right Section -->
            <div class="flex shrink-0 items-center gap-3">

                <!-- Mobile Search -->
                <a href="{{ route('products') }}"
                    class="flex h-10 w-10 items-center justify-center border border-slate-200 text-slate-700 transition hover:border-blue-500 hover:text-blue-600 lg:hidden"
                    aria-label="Search products">

                    <i class="bi bi-search text-lg"></i>

                </a>


                <!-- Cart -->
                <a href="{{ route('cartpage') }}"
                    class="relative flex h-10 w-10 items-center justify-center border border-slate-200 text-slate-700 transition hover:border-blue-500 hover:text-blue-600"
                    aria-label="Shopping cart">

                    <i class="bi bi-cart3 text-lg"></i>

                    <!-- Cart Count -->
                    {{--
                    <span
                        class="absolute -right-2 -top-2 flex h-5 min-w-5 items-center justify-center rounded-full bg-blue-600 px-1 text-xs font-semibold text-white">
                        2
                    </span>
                    --}}

                </a>


                @if(Auth::check())

                    <!-- User -->
                    <div class="hidden items-center gap-2 border-l border-slate-200 pl-4 md:flex">

                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-900 text-sm font-semibold text-white">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>

                        <span class="max-w-[120px] truncate text-sm font-medium text-slate-700">
                            {{ Auth::user()->name }}
                        </span>

                    </div>


                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="hidden border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 transition hover:border-red-500 hover:bg-red-50 hover:text-red-600 sm:block">

                            <i class="bi bi-box-arrow-right mr-1"></i>
                            Logout

                        </button>
                    </form>

                @else

                    <!-- Login -->
                    <a href="{{ route('login') }}"
                        class="hidden px-3 py-2 text-sm font-medium text-slate-700 transition hover:text-blue-600 sm:inline-block">

                        Login

                    </a>


                    <!-- Register -->
                    @if(Route::has('register'))

                        <a href="{{ route('register') }}"
                            class="hidden bg-slate-900 px-5 py-2.5 text-sm font-medium text-white transition duration-200 hover:bg-blue-600 sm:inline-flex">

                            Register

                        </a>

                    @endif

                @endif


                <!-- Mobile Menu Button -->
                <button
                    type="button"
                    class="flex h-10 w-10 items-center justify-center border border-slate-200 text-slate-700 transition hover:border-blue-500 hover:text-blue-600 lg:hidden"
                    aria-label="Open menu">

                    <i class="bi bi-list text-xl"></i>

                </button>

            </div>

        </div>


        <!-- Mobile Search -->
        <div class="pb-4 lg:hidden">

            <form action="{{ route('products') }}" method="GET">

                <div class="relative">

                    <i
                        class="bi bi-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                    </i>

                    <input
                        type="search"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search products..."
                        class="w-full border border-slate-300 bg-slate-50 py-3 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:bg-white focus:ring-1 focus:ring-blue-600"
                    />

                </div>

            </form>

        </div>

    </div>
</header>

