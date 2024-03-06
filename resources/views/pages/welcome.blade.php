<x-layouts.base title="Memorials Studio">

{{-- Hero --}}
<Section>
    <div id="hero" class=" bg-[#F3F3F3]">
        <div class="container mx-auto">
            <div class="flex xl:p-40 2xl:px-72 2xl:pb-32 justify-between">
                <!-- Left -->
                <div class="max-w-[500px] my-auto">
                    <h1 class="text-6xl leading-none font-bold text-[#001C30]">Alatan Academy</h1>
                    <br>
                    <p class="stext-base text-[#52616B] leading-normal">Alatan Training memberikan program pengembangan
                        Sumber Daya Manusia dengan didukung oleh para tenaga pengajar (trainer) berpengalaman.</p>
                    <div class="flex gap-5 my-5">
                        <button
                            class="bg-[#3652AD] text-[#FAFAFA] p-2 rounded-lg border font-semibold text-base">Hubungi
                            Kami
                        </button>
                        <div class="flex border-b-2 border-[#3652AD] ">
                            <a class="text-[#3652AD] p-2 font-semibold text-base" href="">Lihat Jadwal</a>
                            <img class="h-5 my-auto" src="{{ URL::to('/img/icon/arrow-forward.svg') }}">
                        </div>
                    </div>
                </div>
                <!-- Right -->
                <div class="items-end">
                    <img class="" src="{{ URL::to('/img/landing/hero.svg') }}">
                </div>
            </div>
        </div>
    </div>
</Section>

{{-- Benefit --}}
<Section>
    <div class="bg-[#F3F3F3] px-12 pb-12">
        <div class="bg-[#3652AD] container mx-auto rounded">
            <div class="grid grid-cols-3 p-10">
                <div class="text-center">
                    <img src="img/icon/benefit1.svg" class="bg-[#FAFAFA] rounded-lg p-1 size-16 mx-auto" />
                    <h1 class="text-xl font-semibold text-[#FAFAFA] py-4">Learn New Skills</h1>
                    <p class="text-[#FAFAFA] text-base px-8">Li Europan lingues es membres del sam familie. Lor separat existentie
                        es un myth.</p>
                </div>
                <div class="text-center">
                    <img src="img/icon/benefit2.svg" class="bg-[#FAFAFA] rounded-lg p-2 size-16 mx-auto" />
                    <h1 class="text-xl font-semibold text-[#FAFAFA] py-4">Career Opportunities</h1>
                    <p class="text-[#FAFAFA] text-base px-8">Li Europan lingues es membres del sam familie. Lor separat existentie
                        es un myth.</p>
                </div>
                <div class="text-center">
                    <img src="img/icon/benefit3.svg" class="bg-[#FAFAFA] rounded-lg p-2 size-16 mx-auto" />
                    <h1 class="text-xl font-semibold text-[#FAFAFA] py-4">Getting a Certificate</h1>
                    <p class="text-[#FAFAFA] text-base px-8">Li Europan lingues es membres del sam familie. Lor separat existentie
                        es un myth.</p>
                </div>
            </div>
        </div>
    </div>
</Section>

    <div class="bg-[#EEEEEE] p-12">
        <div class="container mx-auto">
            <h1 class="text-center text-2xl font-bold mb-5">Our Public Training Program</h1>
            <div class="grid gap-10 grid-cols-3 rounded-xl">
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <img src="dummy_img/ft1.png" class="rounded-t-2xl w-full object-cover" />
                    <div class="p-5">
                        <h1 class="text-xl mb-2 font-bold">Learn Figma Essential UI/
                            UX Design Training</h1>
                        <div class="flex justify-between">
                            <p>10 Lesson</p>
                            <p>5.0</p>
                        </div>
                        <hr class="h-0.5 bg-black opacity-50 my-3" />
                        <div class="flex justify-between">
                            <p>Rp. 299.000</p>
                            <button class="bg-[#3652AD] text-[#FAFAFA] p-2 rounded-lg border text-xs">Lihat
                                Detail</button>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <img src="dummy_img/ft2.png" class="rounded-t-2xl w-full object-cover" />
                    <div class="p-5">
                        <h1 class="text-xl mb-2 font-bold">Learn Figma Essential UI/
                            UX Design Training</h1>
                        <div class="flex justify-between">
                            <p>10 Lesson</p>
                            <p>5.0</p>
                        </div>
                        <hr class="h-0.5 bg-black opacity-50 my-3" />
                        <div class="flex justify-between">
                            <p>Rp. 299.000</p>
                            <button class="bg-[#3652AD] text-[#FAFAFA] p-2 rounded-lg border text-xs">Lihat
                                Detail</button>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <img src="dummy_img/ft3.png" class="rounded-t-2xl w-full object-cover" />
                    <div class="p-5">
                        <h1 class="text-xl mb-2 font-bold">Learn Figma Essential UI/
                            UX Design Training</h1>
                        <div class="flex justify-between">
                            <p>10 Lesson</p>
                            <p>5.0</p>
                        </div>
                        <hr class="h-0.5 bg-black opacity-50 my-3" />
                        <div class="flex justify-between">
                            <p>Rp. 299.000</p>
                            <button class="bg-[#3652AD] text-[#FAFAFA] p-2 rounded-lg border text-xs">Lihat
                                Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#F3F3F3] p-12">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-1">Testimonials</h1>
            <p class=" text-base mb-5 max-w-[650px]">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por
                scientie, musica, sport etc.</p>
            <div class="grid gap-10 grid-cols-4 rounded-xl">
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <div class=" flex p-5 gap-5">
                        <img src="dummy_img/profile/profil1.svg" class="rounded-full" />
                        <div class="">
                            <p class=" text-lg font-semibold">Richman Arees</p>
                            <p class="text-base text-[#3652AD]">Company name</p>
                        </div>
                    </div>
                    <div class="mx-5">
                        <p>“Li Europan lingues es membres
                            del sam familie. Lor separat
                            existentie es un myth. Por
                            scientie, musica, sport etc.”</p>
                        <div class="flex mt-3 gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <div class=" flex p-5 gap-5">
                        <img src="dummy_img/profile/profil2.svg" class="rounded-full" />
                        <div class="">
                            <p class=" text-lg font-semibold">Mary Jane</p>
                            <p class="text-base text-[#3652AD]">Company name</p>
                        </div>
                    </div>
                    <div class="mx-5">
                        <p>“Li Europan lingues es membres
                            del sam familie. Lor separat
                            existentie es un myth. Por
                            scientie, musica, sport etc.”</p>
                        <div class="flex mt-3 gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                        </div>
                    </div>
                </div><div class="bg-[#F7F7F7] rounded-2xl">
                    <div class=" flex p-5 gap-5">
                        <img src="dummy_img/profile/profil3.svg" class="rounded-full" />
                        <div class="">
                            <p class=" text-lg font-semibold">Gwen Stacy</p>
                            <p class="text-base text-[#3652AD]">Company name</p>
                        </div>
                    </div>
                    <div class="mx-5">
                        <p>“Li Europan lingues es membres
                            del sam familie. Lor separat
                            existentie es un myth. Por
                            scientie, musica, sport etc.”</p>
                        <div class="flex mt-3 gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                        </div>
                    </div>
                </div><div class="bg-[#F7F7F7] rounded-2xl">
                    <div class=" flex p-5 gap-5">
                        <img src="dummy_img/profile/profil4.svg" class="rounded-full" />
                        <div class="">
                            <p class=" text-lg font-semibold">Emma Watson</p>
                            <p class="text-base text-[#3652AD]">Company name</p>
                        </div>
                    </div>
                    <div class="mx-5 mb-5">
                        <p>“Li Europan lingues es membres
                            del sam familie. Lor separat
                            existentie es un myth. Por
                            scientie, musica, sport etc.”</p>
                        <div class="flex mt-3 gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-5 gap-2">
                <div class="w-3 h-3 bg-[#3652AD] rounded-full"></div>
                <div class="w-3 h-3 bg-[#CCCCCC] rounded-full"></div>
                <div class="w-3 h-3 bg-[#CCCCCC] rounded-full"></div>
            </div>
        </div>
    </div>

    <div class="bg-[#EEEEEE] py-12 px-52">
        <div class="bg-[#3652AD] container mx-auto rounded-3xl">
            <div class="py-8 px-40 text-center">
                <h1 class="text-3xl font-semibold text-[#FAFAFA] mb-5">Menuju <span class="text-[#FFD700]">kesuksesan</span> yang lebih tinggi, Bersama Alatan Academy</h1>
                <button
                    class="bg-[#FAFAFA] text-[#3652AD] p-2 rounded-lg border font-semibold text-base">Hubungi
                    Kami</button>
            </div>
        </div>
    </div>
</x-layouts.base>
