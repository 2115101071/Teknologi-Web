<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

        
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <div class="bg-blue-400">
            <div class="flex items-center justify-center w-screen h-screen">
                <form class="px-15 pt-12 pb-10 mb-12 rounded shadow-md bg-gray-300"
                action="/output" method="GET">
                @csrf
                <h2 class="px-4 mb-4 text-2xl font-bold text-black">Web Kalkulator</h2>
                    <div class="flex items-center justify-center">
                        <div class="p-4">
                            <label class="block mb-2 text-md font-bold text-black">
                                Bilangan Pertama
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                            name="valueA" type="text" placeholder="1" value="{{$bilangan1}}">
                            <label class="block mt-2 mb-2 text-md font-bold text-black">
                                Bilangan Kedua
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                            name="valueB" type="text" placeholder="2" value="{{$bilangan2}}">
                            <label class="block mt-2 mb-2 text-sm font-bold text-black">
                                Operasi
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="text" value="{{$operation}}">
                            <label class="block mt-2 mb-2 text-sm font-bold text-black">
                                Hasil
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="number" value="{{$total}}">
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 hover:scale-110">
                        <div class="px-4 py-2 font-bold text-black rounded bg-white hover:bg-gray-700">
                            <button type="submit">Kembali</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>