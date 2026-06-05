<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Forgot Password - {{ config('app.name', 'Futbook') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.08),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.08),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)] font-sans text-white">
        <div class="flex min-h-screen items-center justify-center px-4 py-12">
            <div class="mx-auto w-full max-w-md">
                <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur">
                    <h3 class="text-2xl font-bold text-slate-900">Reset your password</h3>
                    <p class="mt-2 text-sm text-slate-600">Enter the email associated with your account and we'll send a reset link.</p>

                    <x-auth-session-status class="mt-4" :status="session('status')" />

                    <form class="mt-6 space-y-4" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <button type="submit" class="w-full rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">Email Password Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
