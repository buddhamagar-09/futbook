
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign in - {{ config('app.name', 'Futbook') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", "Segoe UI", sans-serif;
        }

        .login-bg {
            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(37, 99, 235, 0.08),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 90% 90%,
                    rgba(59, 130, 246, 0.07),
                    transparent 25%
                ),
                #f8fafc;
        }

        /* Force Breeze inputs to stay white */
        .login-input {
            background-color: #ffffff !important;
            color: #0f172a !important;
            border-color: #cbd5e1 !important;
        }

        .login-input::placeholder {
            color: #94a3b8 !important;
        }

        .login-input:focus {
            background-color: #ffffff !important;
            border-color: #2563eb !important;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.15) !important;
            outline: none !important;
        }

        /* Remove browser autofill dark background */
        .login-input:-webkit-autofill,
        .login-input:-webkit-autofill:hover,
        .login-input:-webkit-autofill:focus {
            -webkit-text-fill-color: #0f172a !important;
            -webkit-box-shadow: 0 0 0px 1000px #ffffff inset !important;
            box-shadow: 0 0 0px 1000px #ffffff inset !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>


<body class="login-bg min-h-screen text-slate-900">

    <div class="flex min-h-screen items-center justify-center px-4 py-10 sm:px-6">

        <div class="w-full max-w-5xl">

            <!-- Main Login Container -->
            <div class="grid overflow-hidden border border-slate-200 bg-white shadow-xl lg:grid-cols-2">


                <!-- ================================= -->
                <!-- LEFT SIDE -->
                <!-- ================================= -->

                <div class="relative hidden overflow-hidden bg-slate-900 p-10 lg:flex lg:flex-col lg:justify-between">

                    <!-- Decorative Background -->
                    <div
                        class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl">
                    </div>

                    <div
                        class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full bg-blue-500/10 blur-3xl">
                    </div>


                    <div class="relative z-10">

                        <!-- Logo -->
                        <a
                            href="{{ url('/') }}"
                            class="inline-flex items-center gap-3"
                        >

                            <span
                                class="flex h-11 w-11 items-center justify-center bg-blue-600 text-lg font-bold text-white"
                            >
                                F
                            </span>

                            <span class="text-xl font-bold tracking-tight text-white">
                                Futbook
                            </span>

                        </a>


                        <!-- Welcome Text -->
                        <div class="mt-24 max-w-md">

                            <p class="mb-4 text-sm font-semibold uppercase tracking-widest text-blue-400">
                                Welcome back
                            </p>

                            <h1 class="text-4xl font-bold leading-tight text-white">
                                Your games.
                                <br>
                                Your bookings.
                                <br>
                                <span class="text-blue-400">
                                    Your time.
                                </span>
                            </h1>

                            <p class="mt-6 text-base leading-7 text-slate-400">
                                Sign in to manage your bookings, check schedules,
                                and enjoy a simpler way to organize your game time.
                            </p>

                        </div>

                    </div>


                    <!-- Security Information -->
                    <div class="relative z-10 border-t border-white/10 pt-6">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-9 w-9 items-center justify-center bg-blue-600/20 text-blue-400"
                            >
                                <i class="bi bi-shield-check text-lg"></i>
                            </div>

                            <div>

                                <p class="text-sm font-medium text-white">
                                    Secure account access
                                </p>

                                <p class="text-xs text-slate-500">
                                    Your information is protected.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ================================= -->
                <!-- RIGHT SIDE -->
                <!-- ================================= -->

                <div class="flex items-center bg-white p-6 sm:p-10 lg:p-12">

                    <div class="mx-auto w-full max-w-md">


                        <!-- Mobile Logo -->
                        <div class="mb-10 lg:hidden">

                            <a
                                href="{{ url('/') }}"
                                class="inline-flex items-center gap-3"
                            >

                                <span
                                    class="flex h-11 w-11 items-center justify-center bg-blue-600 text-lg font-bold text-white"
                                >
                                    F
                                </span>

                                <span class="text-xl font-bold text-slate-900">
                                    Futbook
                                </span>

                            </a>

                        </div>


                        <!-- Header -->
                        <div>

                            <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                                Account
                            </p>

                            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                                Sign in
                            </h2>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Enter your credentials to continue to Futbook.
                            </p>

                        </div>


                        <!-- Session Status -->
                        <x-auth-session-status
                            class="mt-5"
                            :status="session('status')"
                        />


                        <!-- ================================= -->
                        <!-- LOGIN FORM -->
                        <!-- ================================= -->

                        <form
                            class="mt-8 space-y-5"
                            method="POST"
                            action="{{ route('login') }}"
                        >

                            @csrf


                            <!-- EMAIL -->
                            <div>

                                <label
                                    for="email"
                                    class="block text-sm font-semibold text-slate-700"
                                >
                                    Email address
                                </label>


                                <div class="relative mt-2">

                                    <!-- Email Icon -->
                                    <div
                                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400"
                                    >
                                        <i class="bi bi-envelope"></i>
                                    </div>


                                    <!-- Email Input -->
                                    <x-text-input
                                        id="email"
                                        class="login-input block w-full py-3 pl-11 pr-4 text-sm shadow-sm"
                                        type="email"
                                        name="email"
                                        :value="old('email')"
                                        required
                                        autofocus
                                        autocomplete="username"
                                        placeholder="you@example.com"
                                    />

                                </div>


                                <x-input-error
                                    :messages="$errors->get('email')"
                                    class="mt-2"
                                />

                            </div>


                            <!-- PASSWORD -->
                            <div>

                                <div class="flex items-center justify-between">

                                    <label
                                        for="password"
                                        class="block text-sm font-semibold text-slate-700"
                                    >
                                        Password
                                    </label>


                                    @if (Route::has('password.request'))

                                        <a
                                            href="{{ route('password.request') }}"
                                            class="text-sm font-medium text-blue-600 transition hover:text-blue-700 hover:underline"
                                        >
                                            Forgot password?
                                        </a>

                                    @endif

                                </div>


                                <div class="relative mt-2">

                                    <!-- Lock Icon -->
                                    <div
                                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400"
                                    >
                                        <i class="bi bi-lock"></i>
                                    </div>


                                    <!-- Password Input -->
                                    <x-text-input
                                        id="password"
                                        class="login-input block w-full py-3 pl-11 pr-4 text-sm shadow-sm"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Enter your password"
                                    />

                                </div>


                                <x-input-error
                                    :messages="$errors->get('password')"
                                    class="mt-2"
                                />

                            </div>


                            <!-- REMEMBER ME -->
                            <div class="flex items-center">

                                <label class="inline-flex cursor-pointer items-center">

                                    <input
                                        id="remember_me"
                                        type="checkbox"
                                        name="remember"
                                        class="h-4 w-4 border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500"
                                    >

                                    <span class="ml-2 text-sm text-slate-600">
                                        Remember me
                                    </span>

                                </label>

                            </div>


                            <!-- LOGIN BUTTON -->
                            <div>

                                <button
                                    type="submit"
                                    class="flex w-full items-center justify-center gap-2 bg-blue-600 px-5 py-3.5 text-sm font-semibold text-white shadow-sm transition duration-200 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                >

                                    <i class="bi bi-box-arrow-in-right text-base"></i>

                                    Sign in

                                </button>

                            </div>

                        </form>


                        <!-- REGISTER -->
                        @if (Route::has('register'))

                            <div class="mt-8 border-t border-slate-200 pt-6 text-center">

                                <p class="text-sm text-slate-500">

                                    Don't have an account?

                                    <a
                                        href="{{ route('register') }}"
                                        class="font-semibold text-blue-600 transition hover:text-blue-700 hover:underline"
                                    >
                                        Create an account
                                    </a>

                                </p>

                            </div>

                        @endif


                        <!-- FOOTER -->
                        <p class="mt-8 text-center text-xs text-slate-400">
                            © {{ date('Y') }} Futbook. All rights reserved.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>

