<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- component -->
<div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(../public/assets/img/bg-login.jpg">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-60">
                    <div>
                        <h2 class="text-4xl font-bold text-white">POLINDO INTERNASIONAL</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">Lembaga Pendidikan & Profesional mencetak generasi Siap Kerja & Wirausaha Berakhlak Mulia - Profesional - Kompeten, terbukti Lulusannya 100% mampu Kerja / Berwirausaha.</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="flex justify-center mx-auto">
                        <img class="w-auto h-28 sm:h-24" src="../public/assets/img/logo-polindo-300.png" alt="">
                    </div>

                    <div class="mt-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                                <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                    <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>
                                </div>

                                <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    {{ __('Log in') }}
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Belum memiliki akun? <a href="{{ route('register') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Daftar Yuk</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
