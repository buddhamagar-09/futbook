@include('frontend.tailwindcss')

<body class="min-h-screen bg-slate-950 text-white antialiased">
    <div
        class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.16),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.16),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)]">
        @include('frontend.header')

        <main class="mx-auto grid max-w-6xl gap-12 px-6 py-16 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
            <section>
                <p
                    class="inline-flex rounded-full border border-pink-400/30 bg-pink-500/10 px-4 py-2 text-sm text-pink-200">
                    New season, new style
                </p>

                <h1 class="mt-6 max-w-xl text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                    Minimal ecommerce hero for your storefront.
                </h1>

                <p class="mt-6 max-w-xl text-base leading-7 text-slate-300 sm:text-lg">
                    Present your products, highlight special offers, and give shoppers a clean path to log in or create
                    an account.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#collections"
                        class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                        Shop Collection
                    </a>
                    <a href="#contact"
                        class="rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                        Contact Us
                    </a>
                </div>

                <div id="collections" class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <p class="text-sm font-semibold">Fast delivery</p>
                        <p class="mt-1 text-sm text-slate-300">Quick shipping options</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <p class="text-sm font-semibold">Fresh drops</p>
                        <p class="mt-1 text-sm text-slate-300">New products weekly</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <p class="text-sm font-semibold">Member access</p>
                        <p class="mt-1 text-sm text-slate-300">Secure login portal</p>
                    </div>
                </div>
            </section>

            <section id="featured" class="relative">
                <div class="absolute -inset-6 rounded-[2rem] bg-pink-500/10 blur-3xl"></div>
                <div
                    class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 backdrop-blur">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-300">Featured item</p>
                            <h2 class="mt-1 text-2xl font-semibold">Streetwear Set</h2>
                        </div>
                        <span
                            class="rounded-full bg-pink-500/20 px-3 py-1 text-xs font-semibold text-pink-200">-25%</span>
                    </div>

                    <div class="mt-6 rounded-[1.75rem] bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 p-6">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-4">
                                <div
                                    class="flex h-44 items-center justify-center rounded-[1.25rem] bg-white text-slate-900">
                                    <svg viewBox="0 0 24 24" class="h-14 w-14" fill="none" stroke="currentColor"
                                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                        aria-hidden="true">
                                        <path d="M4 7h16l-1.5 13H5.5L4 7Z" />
                                        <path d="M9 7a3 3 0 0 1 6 0" />
                                    </svg>
                                </div>
                            </div>

                            <div
                                class="flex flex-col justify-between rounded-[1.5rem] border border-white/10 bg-white/5 p-4">
                                <div>
                                    <p class="text-sm text-slate-300">From</p>
                                    <p class="mt-1 text-3xl font-bold">$59.00</p>
                                    <p class="mt-3 text-sm leading-6 text-slate-300">Clean product display with a simple
                                        call to action.</p>
                                </div>

                                <div class="mt-6 flex gap-3">
                                    <a href="{{ route('login') }}"
                                        class="flex-1 rounded-full bg-white px-4 py-3 text-center text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                                        Login
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="flex-1 rounded-full border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-white/10">
                                            Register
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- products section -->
        <section id="products" class="mx-auto max-w-6xl px-6 py-16 lg:px-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p
                        class="inline-flex rounded-full border border-pink-400/30 bg-pink-500/10 px-4 py-2 text-sm text-pink-200">
                        Shop the drop
                    </p>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Popular products
                    </h2>
                    <p class="mt-3 max-w-2xl text-base leading-7 text-slate-300">
                        Browse our latest arrivals. Clean cards, clear pricing, and quick actions.
                    </p>
                </div>

                <a href="#collections"
                    class="inline-flex rounded-full border border-white/15 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">
                    View all
                </a>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Product Card -->
                <article
                    class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5 p-5 shadow-xl shadow-black/20 transition hover:border-white/20 hover:bg-white/[0.07]">
                    <div
                        class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-pink-500/10 blur-2xl transition group-hover:bg-pink-500/20">
                    </div>

                    <div class="relative">
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-medium text-slate-300">
                                Best seller
                            </span>
                            <span class="rounded-full bg-pink-500/20 px-3 py-1 text-xs font-semibold text-pink-200">
                                -25%
                            </span>
                        </div>

                        <div
                            class="mt-4 overflow-hidden rounded-[1.25rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 p-4">
                            <div
                                class="flex h-44 items-center justify-center rounded-[1rem] bg-white text-slate-900 transition group-hover:scale-[1.02]">
                                <svg viewBox="0 0 24 24" class="h-14 w-14" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="M4 7h16l-1.5 13H5.5L4 7Z" />
                                    <path d="M9 7a3 3 0 0 1 6 0" />
                                </svg>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-white">Streetwear Set</h3>
                            <div class="mt-2 flex items-baseline gap-2">
                                <p class="text-2xl font-bold">$59.00</p>
                                <p class="text-sm text-slate-500 line-through">$79.00</p>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-300">
                                Premium fit with a minimal storefront-ready presentation.
                            </p>
                        </div>

                        <div class="mt-5 flex gap-3">
                            <a href="#"
                                class="flex-1 rounded-full bg-white px-4 py-3 text-center text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                                Add to cart
                            </a>
                            <a href="#"
                                class="flex-1 rounded-full border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-white/10">
                                View details
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Product Card -->
                <article
                    class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5 p-5 shadow-xl shadow-black/20 transition hover:border-white/20 hover:bg-white/[0.07]">
                    <div
                        class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-pink-500/10 blur-2xl transition group-hover:bg-pink-500/20">
                    </div>

                    <div class="relative">
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-medium text-slate-300">
                                Fresh drop
                            </span>
                            <span class="rounded-full bg-pink-500/20 px-3 py-1 text-xs font-semibold text-pink-200">
                                New
                            </span>
                        </div>

                        <div
                            class="mt-4 overflow-hidden rounded-[1.25rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 p-4">
                            <div
                                class="flex h-44 items-center justify-center rounded-[1rem] bg-white text-slate-900 transition group-hover:scale-[1.02]">
                                <svg viewBox="0 0 24 24" class="h-14 w-14" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="M4 7h16l-1.5 13H5.5L4 7Z" />
                                    <path d="M9 7a3 3 0 0 1 6 0" />
                                </svg>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-white">Urban Hoodie</h3>
                            <div class="mt-2 flex items-baseline gap-2">
                                <p class="text-2xl font-bold">$45.00</p>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-300">
                                Soft fleece build with a clean everyday streetwear look.
                            </p>
                        </div>

                        <div class="mt-5 flex gap-3">
                            <a href="#"
                                class="flex-1 rounded-full bg-white px-4 py-3 text-center text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                                Add to cart
                            </a>
                            <a href="#"
                                class="flex-1 rounded-full border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-white/10">
                                View details
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Product Card -->
                <article
                    class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5 p-5 shadow-xl shadow-black/20 transition hover:border-white/20 hover:bg-white/[0.07]">
                    <div
                        class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-pink-500/10 blur-2xl transition group-hover:bg-pink-500/20">
                    </div>

                    <div class="relative">
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-medium text-slate-300">
                                Limited
                            </span>
                            <span class="rounded-full bg-pink-500/20 px-3 py-1 text-xs font-semibold text-pink-200">
                                -19%
                            </span>
                        </div>

                        <div
                            class="mt-4 overflow-hidden rounded-[1.25rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 p-4">
                            <div
                                class="flex h-44 items-center justify-center rounded-[1rem] bg-white text-slate-900 transition group-hover:scale-[1.02]">
                                <svg viewBox="0 0 24 24" class="h-14 w-14" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="M4 7h16l-1.5 13H5.5L4 7Z" />
                                    <path d="M9 7a3 3 0 0 1 6 0" />
                                </svg>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-white">Minimal Sneakers</h3>
                            <div class="mt-2 flex items-baseline gap-2">
                                <p class="text-2xl font-bold">$89.00</p>
                                <p class="text-sm text-slate-500 line-through">$110.00</p>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-300">
                                Lightweight silhouette designed for all-day comfort.
                            </p>
                        </div>

                        <div class="mt-5 flex gap-3">
                            <a href="#"
                                class="flex-1 rounded-full bg-white px-4 py-3 text-center text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                                Add to cart
                            </a>
                            <a href="#"
                                class="flex-1 rounded-full border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-white/10">
                                View details
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- features section -->
         <section id="features" class="mx-auto max-w-6xl px-6 py-16 lg:px-8">
    <div class="text-center">
        <p class="inline-flex rounded-full border border-pink-400/30 bg-pink-500/10 px-4 py-2 text-sm text-pink-200">
            Why shop with us
        </p>
        <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
            Built for a better shopping experience
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-base leading-7 text-slate-300">
            Fast delivery, fresh drops, and secure member access — everything shoppers need in one clean storefront.
        </p>
    </div>

    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Feature 1 -->
        <div class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.07]">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500/20 text-pink-200">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 7h13v10H3z"/>
                    <path d="M16 10h4l1 3v4h-5"/>
                    <circle cx="7.5" cy="17.5" r="1.5"/>
                    <circle cx="18.5" cy="17.5" r="1.5"/>
                </svg>
            </div>
            <h3 class="mt-5 text-lg font-semibold text-white">Fast delivery</h3>
            <p class="mt-2 text-sm leading-6 text-slate-300">
                Quick shipping options so your orders arrive on time, every time.
            </p>
        </div>

        <!-- Feature 2 -->
        <div class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.07]">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500/20 text-pink-200">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3v3"/>
                    <path d="M12 18v3"/>
                    <path d="M3 12h3"/>
                    <path d="M18 12h3"/>
                    <path d="M5.6 5.6l2.1 2.1"/>
                    <path d="M16.3 16.3l2.1 2.1"/>
                    <path d="M5.6 18.4l2.1-2.1"/>
                    <path d="M16.3 7.7l2.1-2.1"/>
                    <circle cx="12" cy="12" r="4"/>
                </svg>
            </div>
            <h3 class="mt-5 text-lg font-semibold text-white">Fresh drops</h3>
            <p class="mt-2 text-sm leading-6 text-slate-300">
                New products added weekly so your collection always stays current.
            </p>
        </div>

        <!-- Feature 3 -->
        <div class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.07]">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500/20 text-pink-200">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3l7 4v5c0 5-3 8-7 9-4-1-7-4-7-9V7l7-4z"/>
                    <path d="M9 12l2 2 4-4"/>
                </svg>
            </div>
            <h3 class="mt-5 text-lg font-semibold text-white">Member access</h3>
            <p class="mt-2 text-sm leading-6 text-slate-300">
                Secure login portal for returning customers and exclusive perks.
            </p>
        </div>

        <!-- Feature 4 -->
        <div class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.07]">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500/20 text-pink-200">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 7h16l-1.5 13H5.5L4 7Z"/>
                    <path d="M9 7a3 3 0 0 1 6 0"/>
                </svg>
            </div>
            <h3 class="mt-5 text-lg font-semibold text-white">Easy checkout</h3>
            <p class="mt-2 text-sm leading-6 text-slate-300">
                A clean cart flow that makes buying simple and frustration-free.
            </p>
        </div>

        <!-- Feature 5 -->
        <div class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.07]">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500/20 text-pink-200">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2v4"/>
                    <path d="M12 18v4"/>
                    <path d="M4.9 4.9l2.8 2.8"/>
                    <path d="M16.3 16.3l2.8 2.8"/>
                    <path d="M2 12h4"/>
                    <path d="M18 12h4"/>
                    <path d="M4.9 19.1l2.8-2.8"/>
                    <path d="M16.3 7.7l2.8-2.8"/>
                </svg>
            </div>
            <h3 class="mt-5 text-lg font-semibold text-white">Quality products</h3>
            <p class="mt-2 text-sm leading-6 text-slate-300">
                Carefully selected items with consistent quality and modern design.
            </p>
        </div>

        <!-- Feature 6 -->
        <div class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.07]">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500/20 text-pink-200">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16"/>
                    <path d="M4 12h10"/>
                    <path d="M4 18h16"/>
                    <circle cx="18" cy="12" r="2"/>
                </svg>
            </div>
            <h3 class="mt-5 text-lg font-semibold text-white">24/7 support</h3>
            <p class="mt-2 text-sm leading-6 text-slate-300">
                Help when you need it, from order questions to returns and refunds.
            </p>
        </div>
    </div>
</section>
     


        <!-- footer section -->
        <footer id="contact" class="border-t border-white/10">
            <div class="mx-auto max-w-6xl px-6 py-16 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-4">
                    <div class="lg:col-span-2">
                        <a href="#" class="text-xl font-bold tracking-tight text-white">
                            Futbook
                        </a>
                        <p class="mt-4 max-w-md text-sm leading-7 text-slate-400">
                            Minimal ecommerce landing for your storefront. Present products, highlight offers, and guide
                            shoppers with a clean modern experience.
                        </p>

                        <div class="mt-6 flex gap-3">
                            <a href="#"
                                class="rounded-full border border-white/15 bg-white/5 p-3 text-white transition hover:bg-white/10"
                                aria-label="Instagram">
                                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                    <path d="M17 7h.01" />
                                </svg>
                            </a>
                            <a href="#"
                                class="rounded-full border border-white/15 bg-white/5 p-3 text-white transition hover:bg-white/10"
                                aria-label="Twitter">
                                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 10l9 9" />
                                    <path d="M13 5l6 6" />
                                    <path d="M4 4l16 16" />
                                </svg>
                            </a>
                            <a href="#"
                                class="rounded-full border border-white/15 bg-white/5 p-3 text-white transition hover:bg-white/10"
                                aria-label="Facebook">
                                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 8h3V5h-3" />
                                    <path d="M11 14v8" />
                                    <path d="M7 10v4h4" />
                                    <rect x="3" y="3" width="18" height="18" rx="4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold uppercase tracking-wider text-white">Shop</h4>
                        <ul class="mt-4 space-y-3 text-sm text-slate-400">
                            <li><a href="#collections" class="transition hover:text-white">Collections</a></li>
                            <li><a href="#products" class="transition hover:text-white">All products</a></li>
                            <li><a href="#featured" class="transition hover:text-white">Featured</a></li>
                            <li><a href="#" class="transition hover:text-white">New arrivals</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold uppercase tracking-wider text-white">Support</h4>
                        <ul class="mt-4 space-y-3 text-sm text-slate-400">
                            <li><a href="#" class="transition hover:text-white">Contact us</a></li>
                            <li><a href="#" class="transition hover:text-white">Shipping info</a></li>
                            <li><a href="#" class="transition hover:text-white">Returns</a></li>
                            <li><a href="#" class="transition hover:text-white">FAQs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-12 rounded-[1.75rem] border border-white/10 bg-white/5 p-6 sm:p-8">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <h4 class="text-lg font-semibold text-white">Stay in the loop</h4>
                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Get updates on new drops, offers, and exclusive member access.
                            </p>
                        </div>

                        <form class="flex w-full max-w-md flex-col gap-3 sm:flex-row">
                            <input type="email" placeholder="Enter your email"
                                class="flex-1 rounded-full border border-white/15 bg-white/5 px-5 py-3 text-sm text-white placeholder:text-slate-500 outline-none transition focus:border-pink-400/40 focus:bg-white/10">
                            <button type="submit"
                                class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>

                <div
                    class="mt-10 flex flex-col gap-4 border-t border-white/10 pt-8 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between">
                    <p>© 2026 Futbook. All rights reserved.</p>

                    <div class="flex flex-wrap gap-6">
                        <a href="#" class="transition hover:text-white">Privacy policy</a>
                        <a href="#" class="transition hover:text-white">Terms of service</a>
                        <a href="#" class="transition hover:text-white">Cookies</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>