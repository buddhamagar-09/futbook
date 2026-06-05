<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Verify Email - {{ config('app.name', 'Futbook') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(244,114,182,0.08),transparent_28%),radial-gradient(circle_at_right,_rgba(59,130,246,0.08),transparent_24%),linear-gradient(180deg,#020617_0%,#0f172a_55%,#111827_100%)] font-sans text-white">
        <div class="flex min-h-screen items-center justify-center px-4 py-12">
            <div class="mx-auto w-full max-w-md">
                <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur">
                    <h3 class="text-2xl font-bold text-slate-900">Verify your email</h3>
                    <p class="mt-2 text-sm text-slate-600">Thanks for signing up! Please verify your email by clicking the link we sent. If you didn't receive it, we can send another.</p>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mt-4 font-medium text-sm text-emerald-400">A new verification link has been sent to your email address.</div>
                    @endif

                    <div class="mt-6 flex items-center gap-3">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">Resend Verification Email</button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm text-slate-700 hover:underline">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
