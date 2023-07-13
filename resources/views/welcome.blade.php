<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Train Tummy | Discover your favourite restaurants near your railway stations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    @include('header')

    <section class="relative bg-[url(pexels.jpg)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1
                    class="text-3xl font-extrabold sm:text-5xl sm:text-white text-black sm:drop-shadow-lg sm:stroke-black">
                    Let us find your

                    <strong class="block font-extrabold text-rose-700">
                        Favourite Restaurants
                    </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl/relaxed sm:text-white text-black">
                    Fuel your journey with flavor: Uncover nearby restaurants at railway
                    stations!
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="stations"
                        class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Find restaurants
                    </a>

                    <a href="#popular"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Popular restaurants
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="popular">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                <div class="grid p-6 bg-gray-100 rounded place-content-center sm:p-8">
                    <div class="max-w-md mx-auto text-center lg:text-left">
                        <header>
                            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                                Popular Restaurants
                            </h2>

                            <p class="mt-4 text-gray-500">
                                Savor the flavors of exquisite cuisine at our popular restaurants, where culinary
                                mastery meets exceptional dining experiences
                            </p>
                        </header>

                        <a href="/restaurants"
                            class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-rose-700 rounded hover:shadow focus:outline-none focus:ring">
                            Show all
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:py-8">
                    <ul class="grid grid-cols-2 gap-4">
                        <li>
                            <a href="#" class="block group">
                                <img src="https://ak-d.tripcdn.com/images/1i63v2224sk4jatap249D.jpg?proc=source/trip"
                                    alt="" class="object-cover w-full rounded aspect-square" />

                                <div class="mt-3">
                                    <h3
                                        class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Nimrah restaraunt
                                    </h3>

                                    <p class="mt-1 text-sm text-gray-700">Near Hyderabad Railway station</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block group">
                                <img src="https://content.jdmagicbox.com/comp/hyderabad/i9/040pxx40.xx40.191225132553.n6i9/catalogue/cheesiaano-pizza-hyderabad-1ukiienltn.jpg"
                                    alt="" class="object-cover w-full rounded aspect-square" />

                                <div class="mt-3">
                                    <h3
                                        class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Chessiano Pizza
                                    </h3>

                                    <p class="mt-1 text-sm text-gray-700">Near Secunderabad Railway</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white text-gray-900" id="services">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">
                    Connecting Appetites to Railway Stations
                </h2>
                <p class="mt-4 text-gray-600">
                    Discover local dining options at railway stations near you.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <a class="block rounded-xl border border-gray-300 p-8 shadow-xl transition hover:border-rose-700 hover:shadow-rose-700"
                    href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                        <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="stroke-rose-700">
                            <path d="M18 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2Z" />
                            <path
                                d="m9 16l.348-.24c1.465-1.013 3.84-1.013 5.304 0L15 16M8 7h.01M16 7h.01M12 7h.01M12 11h.01M16 11h.01M8 11h.01M10 22v-6.5m4 0V22" />
                        </g>
                    </svg>
                    <h2 class="mt-4 text-xl font-bold text-gray-900">
                        Best Hotels
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        Discover a haven of comfort and elegance at our top-rated hotels, where every detail is
                        meticulously crafted to ensure a truly remarkable experience
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-300 p-8 shadow-xl transition hover:border-rose-700 hover:shadow-rose-700"
                    href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                        <path class="fill-rose-700"
                            d="M12 13V9c0-.55-.45-1-1-1H7V6h5V4H9.5V3h-2v1H6c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h4v2H5v2h2.5v1h2v-1H11c.55 0 1-.45 1-1zm7.59-.48l-5.66 5.65l-2.83-2.83l-1.41 1.42L13.93 21L21 13.93z" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-gray-900">
                        Best prices
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        Enjoy exceptional value and affordability at our selection of best-priced hotels, where you can
                        experience comfortable accommodations </p>
                </a>
                <a class="block rounded-xl border border-gray-300 p-8 shadow-xl transition hover:border-rose-700 hover:shadow-rose-700"
                    href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 32 32">
                        <path class="fill-rose-700"
                            d="M28 18h-6a2.002 2.002 0 0 0-2 2v2h-5.586L10 17.586V12h2a2.002 2.002 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2H6a2.002 2.002 0 0 0-2 2v6a2.002 2.002 0 0 0 2 2h2v5.586l-4.707 4.707a1 1 0 0 0 0 1.414l5 5a1 1 0 0 0 1.414 0L14.414 24H20v2a2.002 2.002 0 0 0 2 2h6a2.002 2.002 0 0 0 2-2v-6a2.002 2.002 0 0 0-2-2ZM6 4h6v6H6Zm3 22.586L5.414 23L9 19.414L12.586 23ZM22 26v-6h6v6Z" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-gray-900">
                        Connectivity
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        Experience unparalleled connectivity at our carefully selected hotels, designed to keep you
                        connected no matter where you are </p>
                </a>



            </div>
        </div>
    </section>


    @include('footer')
</body>

</html>
