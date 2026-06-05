<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Confirm Password - {{ config('app.name', 'Futbook') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.08),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.08),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)] font-sans text-white">
        <div class="flex min-h-screen items-center justify-center px-4 py-12">
            <div class="mx-auto w-full max-w-md">
                <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur">
                    <h3 class="text-2xl font-bold text-slate-900">Confirm your password</h3>
                    <p class="mt-2 text-sm text-slate-600">This is a secure area. Please confirm your password before continuing.</p>

                    <form class="mt-6" method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div>
                            <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                            <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-4 flex justify-end">
                            <button type="submit" class="rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
