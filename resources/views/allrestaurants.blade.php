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
                    <p class="text-lg text-gray-700 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                            width="32" height="32" viewBox="0 0 24 24">
                            <path fill="#888888"
                                d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.438 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125ZM12 12q.825 0 1.413-.587T14 10q0-.825-.588-1.413T12 8q-.825 0-1.413.588T10 10q0 .825.588 1.413T12 12Z" />
                        </svg> Near {{ $restaraunt->station->name }}</p>
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
