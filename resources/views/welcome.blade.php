@include('frontend.tailwindcss')
    <body class="min-h-screen bg-slate-950 text-white antialiased">
        <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.16),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.16),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)]">
           @include('frontend.header')

            <main class="mx-auto grid max-w-6xl gap-12 px-6 py-16 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
                <section>
                    <p class="inline-flex rounded-full border border-pink-400/30 bg-pink-500/10 px-4 py-2 text-sm text-pink-200">
                        New season, new style
                    </p>

                    <h1 class="mt-6 max-w-xl text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                        Minimal ecommerce hero for your storefront.
                    </h1>

                    <p class="mt-6 max-w-xl text-base leading-7 text-slate-300 sm:text-lg">
                        Present your products, highlight special offers, and give shoppers a clean path to log in or create an account.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#collections" class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                            Shop Collection
                        </a>
                        <a href="#contact" class="rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
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
                    <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 backdrop-blur">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-slate-300">Featured item</p>
                                <h2 class="mt-1 text-2xl font-semibold">Streetwear Set</h2>
                            </div>
                            <span class="rounded-full bg-pink-500/20 px-3 py-1 text-xs font-semibold text-pink-200">-25%</span>
                        </div>

                        <div class="mt-6 rounded-[1.75rem] bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 p-6">
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-4">
                                    <div class="flex h-44 items-center justify-center rounded-[1.25rem] bg-white text-slate-900">
                                        <svg viewBox="0 0 24 24" class="h-14 w-14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M4 7h16l-1.5 13H5.5L4 7Z"/>
                                            <path d="M9 7a3 3 0 0 1 6 0"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="flex flex-col justify-between rounded-[1.5rem] border border-white/10 bg-white/5 p-4">
                                    <div>
                                        <p class="text-sm text-slate-300">From</p>
                                        <p class="mt-1 text-3xl font-bold">$59.00</p>
                                        <p class="mt-3 text-sm leading-6 text-slate-300">Clean product display with a simple call to action.</p>
                                    </div>

                                    <div class="mt-6 flex gap-3">
                                        <a href="{{ route('login') }}" class="flex-1 rounded-full bg-white px-4 py-3 text-center text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                                            Login
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="flex-1 rounded-full border border-white/15 bg-white/5 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-white/10">
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

            <footer id="contact" class="border-t border-white/10 py-6 text-center text-sm text-slate-400">
                Futbook ecommerce landing page
            </footer>
        </div>
    </body>
</html>