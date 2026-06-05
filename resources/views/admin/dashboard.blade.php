<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token"  >

    <title>Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-white antialiased">
    <div
        class="min-h-screen bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.18),transparent_28%),radial-gradient(circle_at_top_right,_rgba(16,185,129,0.16),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_50%,#111827_100%)]">
        <header class="border-b border-white/10 bg-slate-950/50 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">FutBook Admin Panel</p>
                    <h1 class="mt-1 text-2xl font-semibold tracking-tight">Dashboard</h1>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </header>

        <main class="w-full px-0 pt-0 pb-8">
            <div class="grid  lg:grid-cols-4">
                <!-- Sidebar -->
                <aside class="col-span-1 h-full lg:col-span-1">
                    <div class="sticky top-0 h-[calc(100vh-4rem)] overflow-auto r border border-white/6 bg-white/3 p-4 backdrop-blur">
                        <nav class="space-y-3">
                            <a href="{{ route('dashboard') }}" class="flex items-center  px-4 py-3 text-base font-semibold text-slate-100 transition hover:bg-white/10 hover:text-white">
                                Dashboard
                            </a>
                            <a href="{{ route('admin.users') }}" class="flex items-center  px-4 py-3 text-base font-semibold text-slate-100 transition hover:bg-white/10 hover:text-white">
                                Users
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 text-base font-semibold text-slate-100 transition hover:bg-white/10 hover:text-white">
                                Bookings
                            </a>
                            <a href="#" class="flex items-center  px-4 py-3 text-base font-semibold text-slate-100 transition hover:bg-white/10 hover:text-white">
                                Reports
                            </a>
                            <a href="#" class="flex items-center  px-4 py-3 text-base font-semibold text-slate-100 transition hover:bg-white/10 hover:text-white">
                                Settings
                            </a>
                        </nav>
                    </div>
                </aside>

                <!-- Main content -->
                <div class="col-span-1 lg:col-span-3">
                    <section class="grid gap-6 lg:grid-cols-[1.7fr_1fr]">
                        <div class=" border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20 backdrop-blur">
                            <p class="text-sm text-slate-300">Welcome back</p>
                            <h2 class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">
                                {{ auth()->user()->name ?? 'Admin' }}
                            </h2>
                            <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-300 sm:text-base">
                                Monitor activity, review important metrics, and manage your booking platform from one simple
                                control center.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-3">
                                <span class="rounded-full border border-emerald-400/30 bg-emerald-500/10 px-4 py-2 text-sm text-emerald-200">System healthy</span>
                                <span class="rounded-full border border-sky-400/30 bg-sky-500/10 px-4 py-2 text-sm text-sky-200">12 new bookings</span>
                                <span class="rounded-full border border-amber-400/30 bg-amber-500/10 px-4 py-2 text-sm text-amber-200">3 pending approvals</span>
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-1">
                            <div class="r border border-white/10 bg-white/5 p-5 backdrop-blur">
                                <p class="text-sm text-slate-400">Total Users</p>
                                <p class="mt-2 text-3xl font-semibold">1,248</p>
                                <p class="mt-2 text-sm text-emerald-300">+8% this week</p>
                            </div>
                            <div class=" border border-white/10 bg-white/5 p-5 backdrop-blur">
                                <p class="text-sm text-slate-400">Active Bookings</p>
                                <p class="mt-2 text-3xl font-semibold">86</p>
                                <p class="mt-2 text-sm text-sky-300">+14 today</p>
                            </div>
                            <div class=" border border-white/10 bg-white/5 p-5 backdrop-blur">
                                <p class="text-sm text-slate-400">Revenue</p>
                                <p class="mt-2 text-3xl font-semibold">$24.9k</p>
                                <p class="mt-2 text-sm text-amber-300">+6.4% monthly</p>
                            </div>
                        </div>
                    </section>

                    <section class="mt-6 grid gap-6 lg:grid-cols-2">
                        <div class=" border border-white/10 bg-slate-900/60 p-6 shadow-xl shadow-black/20 backdrop-blur">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Recent Activity</h3>
                                <span class="rounded-full bg-white/5 px-3 py-1 text-xs text-slate-300">Live</span>
                            </div>

                            <div class="mt-5 space-y-4">
                                <div class="flex items-start justify-between  border border-white/10 bg-white/5 p-4">
                                    <div>
                                        <p class="font-medium">New user registered</p>
                                        <p class="mt-1 text-sm text-slate-400">A new customer created an account.</p>
                                    </div>
                                    <span class="text-sm text-slate-400">2m ago</span>
                                </div>
                                <div class="flex items-start justify-between  border border-white/10 bg-white/5 p-4">
                                    <div>
                                        <p class="font-medium">Booking confirmed</p>
                                        <p class="mt-1 text-sm text-slate-400">A reservation moved to confirmed status.</p>
                                    </div>
                                    <span class="text-sm text-slate-400">14m ago</span>
                                </div>
                                <div class="flex items-start justify-between  border border-white/10 bg-white/5 p-4">
                                    <div>
                                        <p class="font-medium">Payment received</p>
                                        <p class="mt-1 text-sm text-slate-400">Latest transaction completed successfully.</p>
                                    </div>
                                    <span class="text-sm text-slate-400">1h ago</span>
                                </div>
                            </div>
                        </div>

                        <div class=" border border-white/10 bg-gradient-to-br from-slate-900/80 to-slate-800/80 p-6 shadow-xl shadow-black/20 backdrop-blur">
                            <h3 class="text-lg font-semibold">Quick Actions</h3>

                            <div class="mt-5 grid gap-4 sm:grid-cols-2">
                                <a href="#" class=" border border-white/10 bg-white/5 p-4 transition hover:bg-white/10">
                                    <p class="font-medium">Manage Users</p>
                                    <p class="mt-1 text-sm text-slate-400">Review accounts and roles.</p>
                                </a>
                                <a href="#" class=" border border-white/10 bg-white/5 p-4 transition hover:bg-white/10">
                                    <p class="font-medium">View Bookings</p>
                                    <p class="mt-1 text-sm text-slate-400">Track current reservations.</p>
                                </a>
                                <a href="#" class=" border border-white/10 bg-white/5 p-4 transition hover:bg-white/10">
                                    <p class="font-medium">Reports</p>
                                    <p class="mt-1 text-sm text-slate-400">Check monthly performance.</p>
                                </a>
                                <a href="#" class=" border border-white/10 bg-white/5 p-4 transition hover:bg-white/10">
                                    <p class="font-medium">Settings</p>
                                    <p class="mt-1 text-sm text-slate-400">Update platform preferences.</p>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>

</html>