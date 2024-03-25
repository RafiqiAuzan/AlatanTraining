<x-layouts.base>

{{-- Promo Card --}}
<Section>
    <div class="bg-[#F3F3F3] pt-14">
        <div class="bg-[#3652AD] mx-auto">
            <h1 class=" text-white text-center text-6xl p-28">PROMO CARD</h1>
        </div>
    </div>
</Section>

{{-- Category List Backup --}}
{{-- <Section>
    <div class="flex justify-between bg-[#F3F3F3] px-12">
            <p class=" text-black text-base py-4">All Training</p>
            <p class=" text-black text-base py-4">Business Fundamentals</p>
            <p class=" text-black text-base py-4">Personal Development</p>
            <p class=" text-black text-base py-4">Digital Marketing</p>
            <p class=" text-black text-base py-4">Human Resources</p>
            <p class=" text-black text-base py-4">Sertifikasi</p>
        <div class="bg-[#f3f3f3]">
            <p class=" text-black text-base mx-6 py-4">!</p>
        </div>
    </div>
</Section> --}}

{{-- Categories & Search & Product --}}
<section>
    <div class="bg-[#EEEEEE] px-12 py-6">
        <div class="flex container mx-auto">

            {{-- Left --}}
            <div class="w-[400px] pr-6 mt-6">
                <div class="grid gap-4 bg-[#F3F3F3]/60 rounded-xl p-4">
                    <div>
                    <h1 class="font-semibold text-lg">Categories</h1>
                    <ul class="grid w-full mt-4">
                        <li>
                            <input type="radio" id="radio-1" name="hosting" value="radio-1" class="hidden peer" required />
                            <label for="radio-1" class="inline-flex items-center justify-between w-full p-1 gap-3 text-gray-500 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600">                           
                                <p class=" text-base">All Training</p>
                                <i class="my-auto fa-solid fa-arrow-right"></i>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="radio-2" name="hosting" value="radio-2" class="hidden peer" required />
                            <label for="radio-2" class="inline-flex items-center justify-between w-full p-1 gap-3 text-gray-500 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600">                           
                                <p class=" text-base">Business Fundamentals</p>
                                <i class="my-auto fa-solid fa-arrow-right"></i>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="radio-3" name="hosting" value="radio-3" class="hidden peer" required />
                            <label for="radio-3" class="inline-flex items-center justify-between w-full p-1 gap-3 text-gray-500 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600">                           
                                <p class=" text-base">Personal Development</p>
                                <i class="my-auto fa-solid fa-arrow-right"></i>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="radio-4" name="hosting" value="radio-4" class="hidden peer" required />
                            <label for="radio-4" class="inline-flex items-center justify-between w-full p-1 gap-3 text-gray-500 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600">                           
                                <p class=" text-base">Digital Marketing</p>
                                <i class="my-auto fa-solid fa-arrow-right"></i>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="radio-5" name="hosting" value="radio-5" class="hidden peer" required />
                            <label for="radio-5" class="inline-flex items-center justify-between w-full p-1 gap-3 text-gray-500 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600">                           
                                <p class=" text-base">Human Resources</p>
                                <i class="my-auto fa-solid fa-arrow-right"></i>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="radio-6" name="hosting" value="radio-6" class="hidden peer" required />
                            <label for="radio-6" class="inline-flex items-center justify-between w-full p-1 gap-3 text-gray-500 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600">                           
                                <p class=" text-base">Sertifikasi</p>
                                <i class="my-auto fa-solid fa-arrow-right"></i>
                            </label>
                        </li>
                    </ul>
                    </div>
                    <hr class="h-0.5 bg-[#818080] my-2" />
                    <div>
                        <h1 class="font-semibold text-lg">Metode Training</h1>
                        <ul class="grid gap-2 w-full mt-4">
                            <li class="flex gap-2 px-3">
                                <input type="checkbox" id="checkbox1" class="peer" />
                                <label for="checkbox1" class="w-full cursor-pointer text-gray-500 peer-checked:text-blue-400">Online Class</label>
                            </li>
                            <li class="flex gap-2 px-3">
                                <input type="checkbox" id="checkbox2" class="peer" />
                                <label for="checkbox2" class="w-full cursor-pointer text-gray-500 peer-checked:text-blue-400">Offline Class</label>
                            </li>
                            <li class="flex gap-2 px-3">
                                <input type="checkbox" id="checkbox3" class="peer" />
                                <label for="checkbox3" class="w-full cursor-pointer text-gray-500 peer-checked:text-blue-400"> Online Workshop </label>
                            </li>
                            <li class="flex gap-2 px-3">
                                <input type="checkbox" id="checkbox4" class="peer" />
                                <label for="checkbox4" class="w-full cursor-pointer text-gray-500 peer-checked:text-blue-400"> Offline Workshop </label>
                            </li>
                            {{-- <li class="flex w-80 items-center gap-2.5 border-b-2 bg-white px-3 py-2 hover:border-gray-400">
                                <input type="checkbox" id="checkbox4" class="peer relative left-0 h-5 w-5 shrink-0 appearance-none rounded-sm border outline-none after:absolute after:left-0 after:top-0 after:h-full after:w-full after:bg-[url('data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgdmVyc2lvbj0iMS4xIiB4PSIwcHgiIHk9IjBweCI+PHRpdGxlPmljb25fYnlfUG9zaGx5YWtvdjEwPC90aXRsZT48ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjZmZmZmZmIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi4wMDAwMDAsIDI2LjAwMDAwMCkiPjxwYXRoIGQ9Ik0xNy45OTk5ODc4LDMyLjQgTDEwLjk5OTk4NzgsMjUuNCBDMTAuMjI2Nzg5MSwyNC42MjY4MDE0IDguOTczMTg2NDQsMjQuNjI2ODAxNCA4LjE5OTk4Nzc5LDI1LjQgTDguMTk5OTg3NzksMjUuNCBDNy40MjY3ODkxNCwyNi4xNzMxOTg2IDcuNDI2Nzg5MTQsMjcuNDI2ODAxNCA4LjE5OTk4Nzc5LDI4LjIgTDE2LjU4NTc3NDIsMzYuNTg1Nzg2NCBDMTcuMzY2ODIyOCwzNy4zNjY4MzUgMTguNjMzMTUyOCwzNy4zNjY4MzUgMTkuNDE0MjAxNCwzNi41ODU3ODY0IEw0MC41OTk5ODc4LDE1LjQgQzQxLjM3MzE4NjQsMTQuNjI2ODAxNCA0MS4zNzMxODY0LDEzLjM3MzE5ODYgNDAuNTk5OTg3OCwxMi42IEw0MC41OTk5ODc4LDEyLjYgQzM5LjgyNjc4OTEsMTEuODI2ODAxNCAzOC41NzMxODY0LDExLjgyNjgwMTQgMzcuNzk5OTg3OCwxMi42IEwxNy45OTk5ODc4LDMyLjQgWiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==')] after:bg-[length:40px] after:bg-center after:bg-no-repeat after:content-[''] checked:bg-gray-500 hover:ring hover:ring-gray-300" />
                                <label for="checkbox4" class="inline-block w-full cursor-pointer font-medium text-gray-600 peer-checked:text-gray-400 peer-checked:line-through"> Check out something </label>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Right --}}
            <div>
                {{-- Search --}}
                <div class="flex mb-6 justify-between">
                    <div class="">
                        <p class="text-base text-[#3652AD]">Checkout New List</p>
                        <p class="text-3xl text-[#001C30] font-bold">Digital Marketing</p>
                    </div>
                    <div class="my-auto items-end">
                        <form class="">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class=" w-80 p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Product --}}
                <div class="container mx-auto">
                    <div class="grid gap-6 grid-cols-3 rounded-xl">
                        {{-- Card --}}
                        <div class="bg-[#F7F7F7] rounded-2xl">
                            <img src="dummy_img/ft1.png" class="rounded-t-2xl w-full object-cover" />
                            <div class="p-3">
                                <h1 class="text-lg mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                                    UX Design Training</h1>
                                <div class="flex gap-1">
                                    <i class="fa-solid fa-calendar-days text-[#3652AD] my-auto"></i>
                                    <p class="text-sm text-[#001C30]">29 February 2024</p>
                                </div>
                                <hr class="h-0.5 bg-[#818080] my-2" />
                                <div class="flex justify-between">
                                    <p class="text-lg text-[#001C30] font-bold ">Rp. 299.000</p>
                                    <a href="/productdetail"  class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                        <span class="text-[#FAFAFA] text-xs">Lihat Detail</span>
                                        <i class="my-auto text-[#FAFAFA] fa-xs fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Card --}}
                        <div class="bg-[#F7F7F7] rounded-2xl">
                            <img src="dummy_img/ft2.png" class="rounded-t-2xl w-full object-cover" />
                            <div class="p-3">
                                <h1 class="text-lg mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                                    UX Design Training</h1>
                                <div class="flex gap-1">
                                    <i class="fa-solid fa-calendar-days text-[#3652AD] my-auto"></i>
                                    <p class="text-sm text-[#001C30]">29 February 2024</p>
                                </div>
                                <hr class="h-0.5 bg-[#818080] my-2" />
                                <div class="flex justify-between">
                                    <p class="text-lg text-[#001C30] font-bold ">Rp. 299.000</p>
                                    <a href="/productdetail"  class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                        <span class="text-[#FAFAFA] text-xs">Lihat Detail</span>
                                        <i class="my-auto text-[#FAFAFA] fa-xs fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Card --}}
                        <div class="bg-[#F7F7F7] rounded-2xl">
                            <img src="dummy_img/ft3.png" class="rounded-t-2xl w-full object-cover" />
                            <div class="p-3">
                                <h1 class="text-lg mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                                    UX Design Training</h1>
                                <div class="flex gap-1">
                                    <i class="fa-solid fa-calendar-days text-[#3652AD] my-auto"></i>
                                    <p class="text-sm text-[#001C30]">29 February 2024</p>
                                </div>
                                <hr class="h-0.5 bg-[#818080] my-2" />
                                <div class="flex justify-between">
                                    <p class="text-lg text-[#001C30] font-bold ">Rp. 299.000</p>
                                    <a href="/productdetail"  class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                        <span class="text-[#FAFAFA] text-xs">Lihat Detail</span>
                                        <i class="my-auto text-[#FAFAFA] fa-xs fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Card --}}
                        <div class="bg-[#F7F7F7] rounded-2xl">
                            <img src="dummy_img/ft4.png" class="rounded-t-2xl w-full object-cover" />
                            <div class="p-3">
                                <h1 class="text-lg mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                                    UX Design Training</h1>
                                <div class="flex gap-1">
                                    <i class="fa-solid fa-calendar-days text-[#3652AD] my-auto"></i>
                                    <p class="text-sm text-[#001C30]">29 February 2024</p>
                                </div>
                                <hr class="h-0.5 bg-[#818080] my-2" />
                                <div class="flex justify-between">
                                    <p class="text-lg text-[#001C30] font-bold ">Rp. 299.000</p>
                                    <a href="/productdetail"  class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                        <span class="text-[#FAFAFA] text-xs">Lihat Detail</span>
                                        <i class="my-auto text-[#FAFAFA] fa-xs fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Card --}}
                        <div class="bg-[#F7F7F7] rounded-2xl">
                            <img src="dummy_img/ft5.png" class="rounded-t-2xl w-full object-cover" />
                            <div class="p-3">
                                <h1 class="text-lg mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                                    UX Design Training</h1>
                                <div class="flex gap-1">
                                    <i class="fa-solid fa-calendar-days text-[#3652AD] my-auto"></i>
                                    <p class="text-sm text-[#001C30]">29 February 2024</p>
                                </div>
                                <hr class="h-0.5 bg-[#818080] my-2" />
                                <div class="flex justify-between">
                                    <p class="text-lg text-[#001C30] font-bold ">Rp. 299.000</p>
                                    <a href="/productdetail"  class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                        <span class="text-[#FAFAFA] text-xs">Lihat Detail</span>
                                        <i class="my-auto text-[#FAFAFA] fa-xs fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Card --}}
                        <div class="bg-[#F7F7F7] rounded-2xl">
                            <img src="dummy_img/ft6.png" class="rounded-t-2xl w-full object-cover" />
                            <div class="p-3">
                                <h1 class="text-lg mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                                    UX Design Training</h1>
                                <div class="flex gap-1">
                                    <i class="fa-solid fa-calendar-days text-[#3652AD] my-auto"></i>
                                    <p class="text-sm text-[#001C30]">29 February 2024</p>
                                </div>
                                <hr class="h-0.5 bg-[#818080] my-2" />
                                <div class="flex justify-between">
                                    <p class="text-lg text-[#001C30] font-bold ">Rp. 299.000</p>
                                    <a href="/productdetail"  class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                        <span class="text-[#FAFAFA] text-xs">Lihat Detail</span>
                                        <i class="my-auto text-[#FAFAFA] fa-xs fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pagination --}}
                <nav aria-label="Page navigation example" class="">
                    <ul class="flex items-center mt-6 -space-x-px h-8 text-sm justify-end">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                        <span class="sr-only">Next</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        </a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div> 
    </div>
</section>
</x-layouts.base>