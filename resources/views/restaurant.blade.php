@php
    $restId = request()->segment(2);
    $restaraunt = DB::table('restaraunts')->find($restId);
    
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ $restaraunt->name }} </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="/logo.png">

</head>

<body>


    @include('header')
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                <div class="grid p-6 bg-gray-100 rounded place-content-center sm:p-8">
                    <div class="max-w-md mx-auto text-center lg:text-left">
                        <header>
                            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">{{ $restaraunt->name }}</h2>

                            <p class="mt-4 text-gray-500">
                                {{ $restaraunt->description }}
                            </p>
                        </header>

                        <a
                            class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-rose-700 border rounded hover:shadow focus:outline-none focus:ring">
                            Phone : {{ $restaraunt->phone }}
                        </a>

                    </div>
                </div>

                <div class="lg:col-span-2 lg:py-8">
                    <ul class="grid grid-cols-2 gap-4">
                        <li>
                            <a class="block group">
                                <img src="{{ $restaraunt->image_link }}" alt=""
                                    class="object-cover w-full rounded aspect-square the-img" />


                            </a>
                        </li>

                        <li>
                            <a class="block group">
                                {!! $restaraunt->embed_link !!}


                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
</body>

</html>

<style>
    iframe {
        width: 300px;
        height: 300px;
    }

    .the-img {
        width: 350px;
        height: 350px;
    }
</style>
