<nav class="fixed w-full bg-[#F3F3F3] backdrop-blur bg-opacity-60 border-b-2 border-[#1E2022]/60 z-50">
    <div class="container mx-auto flex justify-between lg:px-12">
        <a href="/" class="">
            <img src="img/logo/logo_alatan_biru.svg" class="h-14">
        </a>
        <div class="flex md:order-2 gap-36">
            {{-- <div class="my-auto">
                <a href="#" class=" text-[#19A7CE] text-lg font-semibold">Alatan Skillup
                </a>
                </div> --}}
            <div class="my-auto">
            <a href="/login" type="button"
                class="text-[#001C30] border-2 border-[#001C30] font-medium rounded-lg text-sm px-3 py-1 text-center">
                Masuk</a>
                <a href="/register" type="button"
                class="text-[#FAFAFA] border-2 border-[#3652AD] bg-[#3652AD] hover:bg-[#3652AD] font-medium rounded-lg text-sm px-3 py-1 text-center">
                Daftar</a>
            </div>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                    <a href="/" 
                        class="{{ Request::is('/') ? 'text-[#3652AD]' : 'text-[#001C30]' }} block py-2 px-3 rounded md:bg-transparent md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/public-training"
                        class="{{ Request::is('public-training') ? 'text-[#3652AD]' : 'text-[#001C30]' }} block py-2 px-3 rounded md:bg-transparent md:p-0" aria-current="page">Public
                        Training</a>
                </li>
                <li>
                    <a href="#"
                        class="{{ Request::is('#') ? 'text-[#FAFAFA] bg-[#3652AD]' : 'text-[#001C30]' }} block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">In-house
                        Training</a>
                </li>
                <li>
                    <a href="/aboutus"
                    class="{{ Request::is('aboutus') ? 'text-[#3652AD]' : 'text-[#001C30]' }} block py-2 px-3 rounded md:bg-transparent md:p-0">About
                        us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
