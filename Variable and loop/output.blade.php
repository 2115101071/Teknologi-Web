<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="bg-gradient-to-r from-red-400 to-blue-300">
            <div class="flex items-center justify-center w-screen h-screen">
                <form class="px-10 pt-6 pb-8 mb-4 rounded shadow-md bg-slate-400"
                action="/calculator" method="GET">
                @csrf
                    <h2 class="px-4 mb-4 text-2xl font-bold text-slate-100">Kalkulator</h2>
                    <div class="flex items-center justify-center">
                        <div class="p-4">
                            <label class="block mb-2 text-sm font-bold text-gray-200">
                                Bilangan Pertama
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                            name="valueA" type="text" placeholder="1" value="{{$bilangan1}}">
                            <label class="block mt-2 mb-2 text-sm font-bold text-gray-200">
                                Bilangan Kedua
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                            name="valueB" type="text" placeholder="2" value="{{$bilangan2}}">
                            <label class="block mt-2 mb-2 text-sm font-bold text-gray-200">
                                Operasi
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="text" value="{{$operation}}">
                            <label class="block mt-2 mb-2 text-sm font-bold text-gray-200">
                                Hasil
                            </label>
                            <input disabled class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="number" value="{{$total}}">
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 hover:scale-110">
                        <div class="px-4 py-2 font-bold text-white rounded bg-slate-600 hover:bg-blue-700">
                            <button type="submit">Kembali</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>