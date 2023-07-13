@php
    $stations = DB::table('stations')->get();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl my-2 mx-3">Add a new station</h2>

                <div class="px-3 py-2">

                    <div class=" relative">


                        <form action="/add-station" method="POST" class="flex flex-col gap-y-3">
                            @csrf
                            <div class=" relative ">
                                <input type="text" id="name" name="name"
                                    class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="Station name" />
                            </div>

                            <div class=" relative ">
                                <input type="text" id="image_link" name="image_link"
                                    class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="Image link" />
                            </div>
                            <label class="text-gray-700" for="name">
                                <textarea
                                    class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    id="description" placeholder="Description" name="description" rows="5" cols="40"></textarea>

                            </label>

                            <div class="flex w-full justify-center">
                                <button type="submit"
                                    class="bg-rose-700 text-white px-3 py-2 rounded-sm flex-grow-0">Add Station</button>
                            </div>
                        </form>




                    </div>

                </div>

            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-6">
                <h2 class="text-2xl my-2 mx-3">Add a new restaurant</h2>

                <div class="px-3 py-2">

                    <div class=" relative">


                        <form action="/add-restaurant" method="POST" class="flex flex-col gap-y-3">
                            @csrf
                            <div class=" relative ">
                                <input type="text" id="name" name="name"
                                    class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="Restaurant name" />
                            </div>

                            <div class=" relative ">
                                <input type="text" id="image_link" name="image_link"
                                    class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="Image link" />
                            </div>
                            <select name="station_id" id="station_id">
                                @foreach ($stations as $station)
                                    <option value="{{ $station->id }}">{{ $station->name }}</option>
                                @endforeach
                            </select>
                            <label class="text-gray-700" for="name">
                                <textarea
                                    class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    id="description" placeholder="Description" name="description" rows="5" cols="40"></textarea>

                            </label>
                            <div class=" relative ">
                                <input type="text" id="phone" name="phone"
                                    class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="Phone number" />
                            </div>

                            <div class=" relative ">
                                <input type="text" id="embed_link" name="embed_link"
                                    class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="Embed link" />
                            </div>

                            <div class="flex w-full justify-center">
                                <button type="submit"
                                    class="bg-rose-700 text-white px-3 py-2 rounded-sm flex-grow-0">Add
                                    Restaurant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>{{ session('success') }}</p>
        </div>
    @endif

</x-app-layout>
