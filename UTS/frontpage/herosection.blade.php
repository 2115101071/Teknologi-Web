<x-home-layout>
    <div class = "py-12">
        <div class = "max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class = "bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class = "p-6 bg-white border-b border-gray-200">
                    <main class = "mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class = "flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                            <h1 class = "text-4xl font-bold tracking-tight text-gray-900">
                                Purchases
                            </h1>
                            <div class = "flex items-center">
                                <div date-rangepicker class = "flex items-center">
                                    <div class = "relative">
                                        <div class = "flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden = "true" class = "w-5 h-5 text-gray-500 dark:text-gray-400" fill =  fill="currentColor" viewBox="0 0 20 20" 
                                            xmlns="http://www.w3.org/2000/svg"><path fillrule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 
                                            00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" cliprule="evenodd"></path></svg>
                                        </div>
                                        <input name="start" type = "text" class = "bg-gray-50 border bordergray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500
                                         focus:border-blue-500 block wfull pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:textwhite 
                                         dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                    </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class = "relative">
                                            <div class = "flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden = "true" class = "w-5 h-5 text-gray-500 dark:textgray400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillrule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 
                                            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                                            dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end"> 
                                        </div>
                                </div>
                                <button type = "button" class="inline-block mx-4 px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-bg rounded-md 
                                hover:bg-indigo-100 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition 
                                duration-150 ease-in-out">Check</button>
                            </div>
                        </div>
                            <!-- Hero Section -->
                        <section>
                            <div class="md:flex font-sans pt-8">
                                <div class="md:shrink-0">
                                    <img src="./assets/Kecak-Dance-picture.jpg" alt=""class="h-48 w-full md:h-full md:w-56 inset-0 wfull h-full object-cover rounded-lg" loading="lazy"/>
                                </div>
                                <form class="p-6">
                                    <div class="flex flex-wrap">
                                        <h1 class="flex-auto font-medium text-slate-900">
                                        Kecak Fire Gianyar
                                        </h1>
                                        <div class="w-full flex-none mt-2 order-1 text-3xl font-bold text-violet-600">
                                        Rp. 120.000
                                        </div>
                                    </div>
                                    <div class="flex justify-between .items-center mt-4 mb-6 mr-7 pb-6 border-b borderslate-200"">
                                    <div class='lg:col-span-2 flex flex-col justify-evenly'>
                                        <p>
                                        First, one of the mostvisited tourist attractions in Bali is Ubud, 
                                        visited by either local or international tourists. 
                                        Ubud Bali tourist attraction has astonished many visitors who always want to return
                                        </p>
                                    </div>
                                    </div>
                                    <div class="flex space-x-4 mb-5 text-sm font-medium">
                                        <div class="flex-auto flex space-x-4">
                                            <button class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white" type="submit">
                                                Buy Now
                                            </button>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModalLg" class="h-10 px-6 font-semibold rounded-full border border-slate200 text-slate-900" type="button">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <p class="text-sm text-slate-500">
                                    Free welcome drink, mask, and lunch.
                                    </p>
                                </form>
                                <section>
                            <div>
                                <div class='border text-center bg-slate-300'>
                                    <p class='text-xl font semi-bold tracking-tight text-gray-900 py-2 bg-transparent focus:outline-7'>Fill Your Purchases Here</p>
                                </div>
                            </div>
                        </section>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
        {{-- modal form untuk cek availibility --}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-xhidden overflow-y-auto" id="exampleModalLg" tabindex="-1" arialabelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col wfull pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                </div>
            </div>
        </div>
    </div>
</x-home-layout>