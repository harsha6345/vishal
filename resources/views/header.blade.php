<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="/logo.png">
</head>

<body x-data="{ mobileMenuOpen: false }">
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="/">
                        <span class="sr-only">Home</span>
                        <img src="/logo.png" alt="" class="w-24 filter blend-color-burn" />
                    </a>
                </div>
                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-800 transition hover:text-rose-700 text-lg font-semibold tracking-wide"
                                    href="/restaurants">
                                    Discover
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-800 transition hover:text-rose-700 text-lg font-semibold tracking-wide"
                                    href="/#services">
                                    Services
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="block md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen"
                            class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="mobileMenuOpen" x-transition:enter="transition-opacity ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="md:hidden">
            <nav aria-label="Global" class="px-4 py-2 bg-white">
                <ul class="flex flex-col items-center justify-center gap-3 text-sm">
                    <li class="border-b border-gray-400">
                        <a class="text-gray-800 transition hover:text-rose-700 text-lg font-semibold tracking-wide"
                            href="/">
                            Discover
                        </a>
                    </li>
                    <li class="border-b border-gray-400">
                        <a class="text-gray-800 transition hover:text-rose-700 text-lg font-semibold tracking-wide"
                            href="/">
                            Taste the Heritage
                        </a>
                    </li>
                    <li class="border-b border-gray-400">
                        <a class="text-gray-800 transition hover:text-rose-700 text-lg font-semibold tracking-wide"
                            href="/">
                            Services
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>
