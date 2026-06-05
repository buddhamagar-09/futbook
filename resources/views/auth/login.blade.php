<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sign in - {{ config('app.name', 'Futbook') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.08),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.08),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)] font-sans text-white">
        <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
            <div class="mx-auto w-full max-w-4xl">
                <div class="grid grid-cols-1 gap-6 rounded-3xl sm:grid-cols-2">
                    <div class="hidden rounded-3xl bg-gradient-to-br from-slate-900/80 to-slate-800/70 p-8 sm:block">
                        <a href="{{ url('/') }}" class="flex items-center gap-3">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 ring-1 ring-white/15 text-lg font-bold">F</span>
                            <span class="text-xl font-semibold">Futbook</span>
                        </a>

                        <h2 class="mt-8 text-3xl font-bold">Welcome back</h2>
                        <p class="mt-4 text-sm text-slate-300">Manage bookings, users, and more — securely and quickly.</p>

                        <div class="mt-8 space-y-4">
                            <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                <p class="text-sm font-medium">Fast, reliable bookings</p>
                                <p class="mt-1 text-xs text-slate-400">Keep your schedule in sync with real-time updates.</p>
                            </div>
                            <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                <p class="text-sm font-medium">Secure access</p>
                                <p class="mt-1 text-xs text-slate-400">Two-factor ready and role-based permissions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur">
                        <div class="mx-auto w-full max-w-md">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Sign in to your account</h3>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">Enter your credentials below to continue to Futbook.</p>

                            <x-auth-session-status class="mt-4" :status="session('status')" />

                            <form class="mt-6 space-y-4" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                                    <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div>
                                    <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                                    <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-between">
                                    <label class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                                        <span class="ms-2 text-sm text-slate-700">Remember me</span>
                                    </label>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-sm text-slate-700 hover:underline">Forgot your password?</a>
                                    @endif
                                </div>

                                <div>
                                    <button type="submit" class="w-full rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">Log in</button>
                                </div>
                            </form>

                            @if (Route::has('register'))
                                <p class="mt-6 text-center text-sm text-slate-600">Don't have an account? <a href="{{ route('register') }}" class="font-medium text-slate-900 hover:underline">Sign up</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
