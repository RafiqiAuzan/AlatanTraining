<x-layouts.base title="Memorials Studio">

    <div id="hero" class=" bg-[#F7F6F2]">
        <div class="h-screen">
            <div class="flex pt-44 px-48 justify-between">
            <div class="max-w-[500px]">
                <!-- Konten Anda disini -->
                <h1 class=" text-6xl leading-none font-bold">Alatan Training for Skill Growth</h1>
                <br>
                <p class=" text-lg text-[#52616B] leading-normal">Alatan Training memberikan program pengembangan Sumber Daya Manusia dengan didukung oleh para tenaga pengajar (trainer) berpengalaman.</p>
                <div class="flex gap-5 my-5"><button
                        class="bg-[#3652AD] text-[#FAFAFA] p-2 rounded-lg border font-semibold text-base">Hubungi Kami</button>
                        <div class="flex border-b-2 border-[#3652AD] ">
                            <a class="text-[#3652AD] p-2 font-semibold text-base" href="">Lihat Jadwal</a>
                            <img class="h-5 my-auto" src="{{ URL::to('/img/icon/arrow-forward.svg') }}">
                        </div>
                        </div>
            </div>
            <div class="items-end">
                <img class="" src="{{ URL::to('/img/vector.svg') }}">
            </div>
        </div>
        </div>
    </div>

    <div class="bg-[#F7F6F2] px-12">
        <div class="bg-[#3652AD] container mx-auto rounded">
            <div class="grid grid-cols-3 p-10">
                <div class="text-center">
                    <img src="img/icon/diamond_head.png" class="bg-[#F7F6F2] rounded-lg p-2 mx-auto"/>
                    <h1 class="text-xl text-[#F7F6F2] py-4">Learn New Skills</h1>
                    <p class="text-[#F7F6F2] px-8">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
                </div>
                <div class="text-center">
                    <img src="img/icon/diamond_head.png" class="bg-[#F7F6F2] rounded-lg p-2 mx-auto"/>
                    <h1 class="text-xl text-[#F7F6F2] py-4">Learn New Skills</h1>
                    <p class="text-[#F7F6F2] px-8">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
                </div>
                <div class="text-center">
                    <img src="img/icon/diamond_head.png" class="bg-[#F7F6F2] rounded-lg p-2 mx-auto"/>
                    <h1 class="text-xl text-[#F7F6F2] py-4">Learn New Skills</h1>
                    <p class="text-[#F7F6F2] px-8">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
                </div>
            </div>
        </div>
    </div>



    <div id="aboutus" class=" bg-[#F7F6F2]">
        <div class="h-screen mx-auto container items-center ">
            <div class="pt-28">
                <!-- Konten Anda disini -->
                <h1 class="text-[40px] text-center text-[#CD8D7A] leading-none font-bold">About us</h1>
                <br>
                <div class="mx-48 flex gap-8">
                    <img class="w-[370px]" src="{{ URL::to('/img/aboutusimg.jpg') }}">
                    <p class="text-[18px] text-justify leading-normal mx-">Selamat datang di Memorials Project! Kami
                        adalah studio fotografi yang mengabadikan momen-momen istimewa dalam hidup Anda, mulai dari
                        pemotretan wisuda, pernikahan, prewedding, hingga pemotretan keluarga. Dengan tim fotografer
                        berbakat dan berpengalaman.<br><br>Kami percaya bahwa setiap foto memiliki cerita tersendiri,
                        dan kami berusaha untuk menangkap esensi dari setiap momen dengan cermat dan penuh perhatian.
                        Dengan fokus pada kepuasan dan kepercayaan klien, kami siap berbagi perjalanan ini bersama Anda.
                        Mari kita ciptakan kenangan indah bersama-sama!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="whatweoffer" class=" bg-[#C8C6C6]">
        
    </div>
    </div>
</x-layouts.base>
