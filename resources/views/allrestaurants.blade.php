<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find your restaurants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="/logo.png">

</head>

<body>
    @include('header')

    <section class="flex justify-center py-3 px-2 w-full">
        <form action="/restaurants" method="get" class="w-full flex justify-center">
            <div class="flex w-9/12">

                <input type="text" name="search" placeholder="Search for restaurants" list="Options"
                    value="{{ request('search') }}"
                    class="rounded-l-md w-full px-4 py-2 border-t border-b border-l text-gray-700 bg-white outline-none">

                <datalist id="Options">
                    @foreach ($restaraunts as $restaraunt)
                        <option value="{{ $restaraunt->name }}" class="bg-white text-gray-800 "></option>
                    @endforeach
                </datalist>
                <button type="submit"
                    class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white rounded-r-md">Search</button>
            </div>

        </form>
    </section>
    <section class="px-2 py-3 my-2">
        @foreach ($restaraunts as $restaraunt)
            <div
                class="mx-2 my-2 flex flex-wrap items-center justify-center gap-x-5 gap-y-4 rounded-md bg-slate-100 px-4 py-3">
                <div class="h-48 w-48 bg-rose-700 p-1">
                    <img class="w-full h-full object-cover" src="{{ $restaraunt->image_link }}" alt="" />
                </div>

                <div class="flex w-full flex-col gap-y-2 md:w-9/12">
                    <h3 class="text-2xl text-black my-3">{{ $restaraunt->name }}</h3>
                    <hr class="border-rose-700">
                    <p class="text-lg text-gray-700">{{ $restaraunt->name }}</p>
                    <div class="w-full flex justify-end">
                        <a href="/restaurant/{{ $restaraunt->id }}"
                            class="bg-rose-700 hover:bg-rose-800 transition px-3 py-2 text-white rounded-sm flex items-center gap-2">Know
                            More <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                viewBox="0 0 24 24">
                                <path fill="#fff" d="m12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    @include('footer')
</body>

</html>
