<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us - Futbook</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen bg-gradient-to-b from-white via-slate-50 to-white">

        @include('frontend.header')


        <!-- Contact Hero -->
        <section class="border-b border-slate-200 bg-white">

            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">

                <div class="max-w-3xl">

                    <span
                        class="inline-flex items-center gap-2 border border-blue-100 bg-blue-50 px-3 py-1.5 text-xs font-semibold uppercase tracking-wide text-blue-600">
                        <i class="bi bi-chat-dots"></i>
                        Get in touch
                    </span>

                    <h1 class="mt-5 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                        We'd love to hear from you.
                    </h1>

                    <p class="mt-5 max-w-2xl text-base leading-7 text-slate-500 sm:text-lg">
                        Have a question about a product, your order, delivery, or anything
                        else? Send us a message and our team will get back to you as soon
                        as possible.
                    </p>

                </div>

            </div>

        </section>


        <!-- Contact Content -->
        <main class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <div class="grid gap-10 lg:grid-cols-3">


                <!-- Contact Information -->
                <section class="lg:col-span-1">

                    <div class="border border-slate-200 bg-white p-6 shadow-sm">

                        <h2 class="text-xl font-bold text-slate-900">
                            Contact information
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Choose the most convenient way to reach our team.
                        </p>


                        <!-- Email -->
                        <div class="mt-8 flex gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center bg-blue-50 text-lg text-blue-600">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-900">
                                    Email
                                </h3>

                                <a href="mailto:support@futbook.com"
                                    class="mt-1 block text-sm text-slate-500 transition hover:text-blue-600">
                                    support@futbook.com
                                </a>
                            </div>

                        </div>


                        <!-- Phone -->
                        <div class="mt-6 flex gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center bg-blue-50 text-lg text-blue-600">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-900">
                                    Phone
                                </h3>

                                <a href="tel:+9779800000000"
                                    class="mt-1 block text-sm text-slate-500 transition hover:text-blue-600">
                                    +977 9800000000
                                </a>
                            </div>

                        </div>


                        <!-- Location -->
                        <div class="mt-6 flex gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center bg-blue-50 text-lg text-blue-600">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-900">
                                    Location
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Kathmandu, Nepal
                                </p>
                            </div>

                        </div>


                        <!-- Opening Hours -->
                        <div class="mt-6 flex gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center bg-blue-50 text-lg text-blue-600">
                                <i class="bi bi-clock"></i>
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-900">
                                    Business hours
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Sun - Fri: 9:00 AM - 6:00 PM
                                </p>
                            </div>

                        </div>


                        <!-- Divider -->
                        <div class="my-8 border-t border-slate-200"></div>


                        <!-- Social -->
                        <div>

                            <h3 class="text-sm font-semibold text-slate-900">
                                Follow us
                            </h3>

                            <div class="mt-4 flex gap-3">

                                <a href="#"
                                    aria-label="Instagram"
                                    class="flex h-10 w-10 items-center justify-center border border-slate-200 text-slate-600 transition hover:border-blue-600 hover:bg-blue-600 hover:text-white">
                                    <i class="bi bi-instagram"></i>
                                </a>

                                <a href="#"
                                    aria-label="Facebook"
                                    class="flex h-10 w-10 items-center justify-center border border-slate-200 text-slate-600 transition hover:border-blue-600 hover:bg-blue-600 hover:text-white">
                                    <i class="bi bi-facebook"></i>
                                </a>

                                <a href="#"
                                    aria-label="Twitter"
                                    class="flex h-10 w-10 items-center justify-center border border-slate-200 text-slate-600 transition hover:border-blue-600 hover:bg-blue-600 hover:text-white">
                                    <i class="bi bi-twitter-x"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </section>


                <!-- Contact Form -->
                <section class="lg:col-span-2">

                    <div class="border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                        <div>
                            <h2 class="text-2xl font-bold text-slate-900">
                                Send us a message
                            </h2>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Fill out the form below and we'll get back to you shortly.
                            </p>
                        </div>


                        <form action="#" method="POST" class="mt-8">

                            @csrf

                            <!-- Name + Email -->
                            <div class="grid gap-5 sm:grid-cols-2">

                                <div>

                                    <label for="name"
                                        class="mb-2 block text-sm font-semibold text-slate-700">
                                        Full name
                                    </label>

                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Enter your name"
                                        required
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600"
                                    >

                                </div>


                                <div>

                                    <label for="email"
                                        class="mb-2 block text-sm font-semibold text-slate-700">
                                        Email address
                                    </label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="you@example.com"
                                        required
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600"
                                    >

                                </div>

                            </div>


                            <!-- Phone + Subject -->
                            <div class="mt-5 grid gap-5 sm:grid-cols-2">

                                <div>

                                    <label for="phone"
                                        class="mb-2 block text-sm font-semibold text-slate-700">
                                        Phone number
                                    </label>

                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        placeholder="Enter your phone number"
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600"
                                    >

                                </div>


                                <div>

                                    <label for="subject"
                                        class="mb-2 block text-sm font-semibold text-slate-700">
                                        Subject
                                    </label>

                                    <select
                                        id="subject"
                                        name="subject"
                                        class="w-full border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-blue-600 focus:ring-1 focus:ring-blue-600">

                                        <option value="">Select a subject</option>
                                        <option value="order">Order inquiry</option>
                                        <option value="product">Product inquiry</option>
                                        <option value="shipping">Shipping & delivery</option>
                                        <option value="return">Returns & refunds</option>
                                        <option value="other">Other</option>

                                    </select>

                                </div>

                            </div>


                            <!-- Message -->
                            <div class="mt-5">

                                <label for="message"
                                    class="mb-2 block text-sm font-semibold text-slate-700">
                                    Message
                                </label>

                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    placeholder="How can we help you?"
                                    required
                                    class="w-full resize-none border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-1 focus:ring-blue-600"></textarea>

                            </div>


                            <!-- Submit -->
                            <div class="mt-6">

                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center gap-2 bg-blue-600 px-7 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">

                                    Send message
                                    <i class="bi bi-arrow-right"></i>

                                </button>

                            </div>

                        </form>

                    </div>

                </section>

            </div>


            <!-- FAQ / Help Banner -->
            <section class="mt-12 border border-slate-200 bg-slate-900 px-6 py-8 sm:px-8">

                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center bg-blue-600 text-white">
                                <i class="bi bi-question-lg"></i>
                            </div>

                            <h2 class="text-lg font-semibold text-white">
                                Looking for quick answers?
                            </h2>

                        </div>

                        <p class="mt-2 text-sm text-slate-400">
                            Check our frequently asked questions before contacting us.
                        </p>

                    </div>

                    <a href="#"
                        class="inline-flex w-fit items-center gap-2 border border-slate-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:border-blue-500 hover:bg-blue-600">

                        Visit FAQs
                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </section>

        </main>


        @include('frontend.footer')

    </div>

</body>

</html>