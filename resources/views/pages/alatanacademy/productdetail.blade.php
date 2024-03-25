<x-layouts.base>

{{-- breadcrumb --}}
<Section>
    <div class="bg-[#F3F3F3] px-12 pt-20">
        <nav class="flex container mx-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
              <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-xs font-medium text-[#001C30] hover:text-[#3652AD]">
                  <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  <a href="#" class="ms-1 text-xs font-medium text-[#001C30] hover:text-[#3652AD] md:ms-2">Public Training</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  <a href="#" class="ms-1 text-xs font-medium text-[#001C30] hover:text-[#3652AD] md:ms-2">Digital Marketing</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  <span class=" text-[#3652AD] ms-1 text-xs font-semibold md:ms-2">Perhitungan Estimasi TKDN Pada Pengadaan Barang/Jasa Pemerintah</span>
                </div>
              </li>
            </ol>
          </nav>
    </div>
</Section>

{{-- Detail Product --}}
<Section>
    <div class="bg-[#F3F3F3] px-12 py-4">
        <div class="flex justify-between gap-10 container mx-auto">
            <div class="">
                <h1 class=" text-black text-3xl pb-4 font-bold">Perhitungan Estimasi TKDN Pada Pengadaan Barang/Jasa Pemerintah</h1>
                <div class="flex gap-2">
                    <div class="flex gap-1">
                        <img src="img/icon/date.svg" class="rounded-t-2xl" />
                        <p>29 February 2024</p>
                    </div>
                    <p>|</p>
                    <div class="flex gap-1">
                        <div class="flex ">
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                            <img src="img/icon/star.svg" class=""/>
                        </div>
                        <p>5.0</p>
                        <p>(120.000 Ulasan)</p>
                    </div>
                </div>
                <p class=" text-black text-base py-4">Penjelasan Product, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class=" text-black text-base py-4">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="border-2 rounded-lg p-2 grid gap-3 ">
                <p class=" text-black text-base">Target & Tujuan</p>
                <p>Target or tujuan product, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="max-w-[580px] gap-2 grid">
                    <div class="flex gap-1 my-auto ">
                        <img src="img/icon/checkmarkcircle.svg" class="size-[19px]" />
                        <p class="text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                    <div class="flex gap-1 my-auto">
                        <img src="img/icon/checkmarkcircle.svg" class="size-[19px]" />
                        <p class="text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                </div>
            </div>
            {{-- Card --}}
            <div class="bg-[#f3f3f3]">
                <div class="border-2 w-80 p-2 rounded-2xl grid gap-2">
                    <img src="dummy_img/ft3.png" class="rounded-2xl w-full object-cover" />
                    <p class="text-xl text-[#001C30] font-bold ">Rp. 299.000</p>
                    <div class="flex gap-1">
                        <p class="text-sm line-through text-[#001C30] ">Rp. 445.000</p>
                        <p class="bg-[#3652AD] text-[#FAFAFA] px-1 my-auto text-xs rounded" >28% off</p>
                    </div>
                    <div class="flex bg-[#3652AD] p-2 rounded justify-center">
                        <a class="text-[#FAFAFA] font-semibold text-xs" href="">Daftar Sekarang</a>
                    </div>
                    <div class="flex bg-[#FAFAFA] p-2 rounded justify-center border border-[#3652AD]">
                        <a class="text-[#3652AD] font-semibold text-xs" href="">Tanya kami</a>
                    </div>
                    <div class="grid gap-2">
                        <p class="text-base text-[#001C30] font-semibold ">Fasilitas Peserta</p>
                        <div class="flex gap-1 my-auto">
                            <img src="img/icon/clipboard.svg" class="size-[19px]" />
                            <p class="text-sm">Mengikuti 2 Sesi Pelatihan Online</p>
                        </div>
                        <div class="flex gap-1 my-auto">
                            <img src="img/icon/clipboard.svg" class="size-[19px]" />
                            <p class="text-sm">Full lifetime access</p>
                        </div>
                        <div class="flex gap-1 my-auto">
                            <img src="img/icon/clipboard.svg" class="size-[19px]" />
                            <p class="text-sm">Sertifikat Pelatihan (E-Certificate)</p>
                        </div>
                    </div>
                </div>
                <Div class="flex p-1 gap-2 mt-2">
                    <p class="font-bold">Pengajar</p>
                    <p class=" bg-[#3652AD] px-2 rounded-lg text-[#FAFAFA] font-base">1</p>
                </Div>
                <Div class="flex p-1 gap-2">
                    <img src="dummy_img/profile/profil2.svg" class="rounded-full" />
                    <Div class="">
                        <p class="font-semibold text-base">Max Alexix</p>
                        <p class="font-base text-sm">XX Professional at XXX Company</p>
                    </Div>
                </Div>
            </div>
        </div>
    </div>
</Section>

{{-- Feedback --}}
<Section>
    <div class="px-12 py-4 bg-[#EEEEEE]">
        <div class="container mx-auto justify-between">
            <p class="text-3xl font-bold">Penilaian & Ulasan</p>
            <div class="flex">
                <div class="p-8 grid gap-2">
                    <p class=" font-bold text-7xl text-center">5.0</p>
                    <div class="flex justify-center">
                        <img src="img/icon/star.svg" class=""/>
                        <img src="img/icon/star.svg" class=""/>
                        <img src="img/icon/star.svg" class=""/>
                        <img src="img/icon/star.svg" class=""/>
                        <img src="img/icon/star.svg" class=""/>
                    </div>
                    <p>(249.942 Ulasan)</p>
                </div>
                <div class="py-6 grid gap-2">
                    {{-- Rate Bar --}}
                    <div class="flex gap-2">
                        <div class="flex gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <p>5</p>
                        </div>
                        <div class="flex">
                            <div class="bg-[#FFD541] rounded-l-full my-auto h-3 w-32 "></div>
                            <div class="bg-[#D2D3D4] rounded-r-full my-auto h-3 w-10 "></div>
                        </div>
                        <p>100.000</p>
                    </div>
                    {{-- Rate Bar --}}
                    <div class="flex gap-2">
                        <div class="flex gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <p>5</p>
                        </div>
                        <div class="flex">
                            <div class="bg-[#FFD541] rounded-l-full my-auto h-3 w-32 "></div>
                            <div class="bg-[#D2D3D4] rounded-r-full my-auto h-3 w-10 "></div>
                        </div>
                        <p>100.000</p>
                    </div>
                    {{-- Rate Bar --}}
                    <div class="flex gap-2">
                        <div class="flex gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <p>5</p>
                        </div>
                        <div class="flex">
                            <div class="bg-[#FFD541] rounded-l-full my-auto h-3 w-32 "></div>
                            <div class="bg-[#D2D3D4] rounded-r-full my-auto h-3 w-10 "></div>
                        </div>
                        <p>100.000</p>
                    </div>
                    {{-- Rate Bar --}}
                    <div class="flex gap-2">
                        <div class="flex gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <p>5</p>
                        </div>
                        <div class="flex">
                            <div class="bg-[#FFD541] rounded-l-full my-auto h-3 w-32 "></div>
                            <div class="bg-[#D2D3D4] rounded-r-full my-auto h-3 w-10 "></div>
                        </div>
                        <p>100.000</p>
                    </div>
                    {{-- Rate Bar --}}
                    <div class="flex gap-2">
                        <div class="flex gap-1">
                            <img src="img/icon/star.svg" class=""/>
                            <p>5</p>
                        </div>
                        <div class="flex">
                            <div class="bg-[#FFD541] rounded-l-full my-auto h-3 w-32 "></div>
                            <div class="bg-[#D2D3D4] rounded-r-full my-auto h-3 w-10 "></div>
                        </div>
                        <p>100.000</p>
                    </div>
                </div>
            </div>
            {{-- feedback card --}}
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
            <div class="mt-5">
                <p class="text-end underline underline-offset-1">Lihat Semua Ulasan</p>
            </div>
        </div>
    </div>
</Section>

{{-- Product --}}
<section>
    <div class="bg-[#F3F3F3] px-12 py-4">
        <div class="container mx-auto">
            <h2 class="text-center text-[#3652AD] text-base">Related Courses</h2>
            <h1 class="text-center text-[#001C30] text-2xl font-bold mb-5">Courses You May Like</h1>
            <div class="grid gap-10 grid-cols-3 rounded-xl">
                {{-- Card --}}
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <img src="dummy_img/ft1.png" class="rounded-t-2xl w-full object-cover" />
                    <div class="p-5">
                        <h1 class="text-xl mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                            UX Design Training</h1>
                        <div class="flex gap-1">
                            <img src="img/icon/date.svg" class="rounded-t-2xl" />
                            <p class="text-sm text-[#001C30]">29 February 2024</p>
                        </div>
                        <hr class="h-0.5 bg-[#001C30] opacity-50 my-2" />
                        <div class="flex justify-between">
                            <p class="text-xl text-[#001C30] font-bold ">Rp. 299.000</p>
                            <div class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                <a class="text-[#FAFAFA] text-xs" href="">Lihat Detail</a>
                                <img class="my-auto" src="{{ URL::to('/img/icon/arrow-forward2.svg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Card --}}
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <img src="dummy_img/ft2.png" class="rounded-t-2xl w-full object-cover" />
                    <div class="p-5">
                        <h1 class="text-xl mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                            UX Design Training</h1>
                        <div class="flex gap-1">
                            <img src="img/icon/date.svg" class="rounded-t-2xl" />
                            <p class="text-sm text-[#001C30]">29 February 2024</p>
                        </div>
                        <hr class="h-0.5 bg-[#001C30] opacity-50 my-2" />
                        <div class="flex justify-between">
                            <p class="text-xl text-[#001C30] font-bold ">Rp. 299.000</p>
                            <div class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                <a class="text-[#FAFAFA] text-xs" href="">Lihat Detail</a>
                                <img class="my-auto" src="{{ URL::to('/img/icon/arrow-forward2.svg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Card --}}
                <div class="bg-[#F7F7F7] rounded-2xl">
                    <img src="dummy_img/ft3.png" class="rounded-t-2xl w-full object-cover" />
                    <div class="p-5">
                        <h1 class="text-xl mb-2 text-[#001C30] font-bold">Learn Figma Essential UI/
                            UX Design Training</h1>
                        <div class="flex gap-1">
                            <img src="img/icon/date.svg" class="rounded-t-2xl" />
                            <p class="text-sm text-[#001C30]">29 February 2024</p>
                        </div>
                        <hr class="h-0.5 bg-[#001C30] opacity-50 my-2" />
                        <div class="flex justify-between">
                            <p class="text-xl text-[#001C30] font-bold ">Rp. 299.000</p>
                            <div class="flex bg-[#3652AD] p-2 gap-1 rounded-lg">
                                <a class="text-[#FAFAFA] text-xs" href="">Lihat Detail</a>
                                <img class="my-auto" src="{{ URL::to('/img/icon/arrow-forward2.svg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section>
    <div class="bg-[#EEEEEE] px-12 py-6">
        <div class="container mx-auto">
            <h1 class="text-center text-[#001C30] text-3xl font-bold mb-5">Punya pertanyaan seputar program ini?</h1>
            <h2 class="text-center text-[#001C30] text-base mb-5">Berikut adalah beberapa pertanyaan yang paling sering ditanyakan.</h2>
            <div class="px-64 grid gap-3">
                {{-- Questions --}}
                <div class="border p-2 grid gap-4 border-1 rounded-xl border-black">
                    <div class="flex justify-between">
                        <p>What is an online course?</p>
                        <img src="img/icon/x.svg" class=""/>
                    </div>
                    <p class="max-w-[500px]">Li Europan lingues es membres
                        del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc.</p>
                </div>
                {{-- Questions --}}
                <div class="border p-2 grid gap-4 border-1 rounded-xl border-black">
                    <div class="flex justify-between">
                        <p>How do I enroll in an online course?</p>
                        <img src="img/icon/down.svg" class=""/>
                    </div>
                </div>
                {{-- Questions --}}
                <div class="border p-2 grid gap-4 border-1 rounded-xl border-black">
                    <div class="flex justify-between">
                        <p>How do online courses work?</p>
                        <img src="img/icon/down.svg" class=""/>
                    </div>
                </div>
                {{-- Questions --}}
                <div class="border p-2 grid gap-4 border-1 rounded-xl border-black">
                    <div class="flex justify-between">
                        <p>Are online courses self-paced?</p>
                        <img src="img/icon/down.svg" class=""/>
                    </div>
                </div>
                {{-- Questions --}}
                <div class="border p-2 grid gap-4 border-1 rounded-xl border-black">
                    <div class="flex justify-between">
                        <p>Can I earn a degree through online courses?</p>
                        <img src="img/icon/down.svg" class=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <nav aria-label="Page navigation example">
    <ul class="flex items-center -space-x-px h-8 text-sm">
      <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
          <span class="sr-only">Previous</span>
          <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
      </li>
      <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
      </li>
      <li>
        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
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
  </nav> --}}
</x-layouts.base>