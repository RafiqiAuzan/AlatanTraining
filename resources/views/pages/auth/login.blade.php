<x-layouts.auth title="Alatan Indonesia">

    <div class="relative h-screen">
        <img src="img/auth/wallpaper.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Background Image">
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] bg-[#EEEEEE]/60 rounded-2xl">
            <button id="backButton" type="button"
                class="mt-4 ml-4 text-[#FAFAFA] bg-[#3652AD] hover:bg-blue-800 font-medium rounded-full text-sm p-2 text-center inline-flex items-center">
                <i class="fa-solid fa-arrow-left"></i>
            </button>

            <img src="img/logo/logo_alatan_biru.svg" class=" h-28 mx-auto" alt="Logo">
            <form class="py-4 px-10">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="floating_email" id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-[#001C30] bg-red-300/0 border-0 border-b-2 border-[#52616B] appearance-none focus:outline-none focus:ring-0 focus:border-[#3652AD] peer"
                        placeholder=" " required autocomplete="off" />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-[#52616B] duration-300 bg-transparent transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#3652AD] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                        address</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="password" name="floating_password2" id="floating_password2"
                        class="block py-2.5 px-0 w-full text-sm text-[#001C30] bg-transparent border-0 border-b-2 border-[#52616B] appearance-none focus:outline-none focus:ring-0 focus:border-[#3652AD] peer"
                        placeholder=" " required />
                    <label for="floating_password2"
                        class="peer-focus:font-medium absolute text-sm text-[#52616B] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#3652AD] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <button type="submit"
                    class="text-white bg-[#3652AD] hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>

</x-layouts.auth>

<script>
    document.getElementById("backButton").addEventListener("click", function() {
        window.history.back();
    });
</script>
