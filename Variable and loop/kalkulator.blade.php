<x-home-layout?> 
    <div>
        <div class='bg-white overflow-hidden shadow-sm'>
            <div class="p-6 bg-gray-300 border-b border-gray-200">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> 
                    <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                           Kalkulator
                        </h1>
                    </div>
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="flex flex-wrap m-4">
                                <div class="p-4 md:w-1/3">
                                    <form method="POST" action="/hasil">
                                        @csrf
                                        <div class="flex items-center gap-x-4">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</x-home-layout>