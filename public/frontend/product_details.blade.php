<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-green-50">

    <div class="max-w-7xl mx-auto px-4 py-10">

        <div
            class="bg-white rounded-3xl border border-teal-100 shadow-xl p-6 lg:p-10 grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- IMAGE -->
            <div
                class="aspect-square overflow-hidden rounded-2xl bg-gradient-to-br from-cyan-50 to-green-50 border border-teal-100 flex items-center justify-center hover:scale-[1.02] transition">

                <img src="https://via.placeholder.com/600"
                    alt="Product"
                    class="w-full h-full object-cover">
            </div>

            <!-- DETAILS -->
            <div class="flex flex-col justify-center">

                <h1 class="text-4xl font-semibold mb-3">
                    Product Name
                </h1>

                <div class="flex flex-wrap gap-3 mb-4">
                    <span
                        class="px-3 py-2 rounded-full text-sm font-semibold border border-teal-100 bg-teal-50 text-teal-700">
                        <i class="fa-solid fa-shield-heart mr-1"></i>
                        Premium Quality
                    </span>

                    <span
                        class="px-3 py-2 rounded-full text-sm font-semibold border border-teal-100 bg-teal-50 text-teal-700">
                        <i class="fa-solid fa-truck-fast mr-1"></i>
                        Fast Delivery
                    </span>
                </div>

                <div class="text-3xl font-semibold text-teal-700 mb-4">
                    Rs 2,500
                </div>

                <div class="text-amber-500 text-lg tracking-wider mb-4">
                    ★★★★★
                </div>

                <p class="text-gray-600 leading-8 mb-5">
                    Product description goes here. This section contains
                    details about the product features, materials, and
                    benefits.
                </p>

                <div
                    class="inline-block w-fit px-4 py-2 rounded-full bg-green-100 border border-green-300 text-green-700 font-bold mb-4">
                    25 items left
                </div>

                <div class="text-sm text-teal-700 mb-4">
                    In Stock
                </div>

                <div class="space-y-2 text-sm text-gray-600 mb-6">
                    <div>
                        <i class="fa-solid fa-circle-check mr-2 text-green-600"></i>
                        Easy return within 7 days
                    </div>

                    <div>
                        <i class="fa-solid fa-lock mr-2 text-green-600"></i>
                        Secure checkout experience
                    </div>
                </div>

                <!-- FORM -->
                <form class="space-y-4">

                    <div
                        class="flex items-center gap-3 bg-teal-50 border border-teal-100 rounded-xl px-4 py-3 w-fit">

                        <label class="font-semibold text-teal-700">
                            Quantity:
                        </label>

                        <input
                            type="number"
                            value="1"
                            min="1"
                            class="w-20 text-center border border-teal-200 rounded-lg p-2 font-semibold text-teal-700">
                    </div>

                    <button
                        type="submit"
                        class="w-full max-w-xs bg-gradient-to-r from-teal-700 to-teal-800 text-white font-semibold py-4 rounded-full shadow-lg hover:-translate-y-1 transition">
                        Add to Cart
                    </button>

                </form>

            </div>

        </div>

    </div>

</body>
</html>