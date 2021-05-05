<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP4 FISIP</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <livewire:styles />
</head>
<body>
    
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-2 py-3 mx-auto md:flex">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300 hidden md:inline-block" href="/"><img class="h-26 w-48" src="{{ asset('assets/img/Logo SP4 FISIP UNSYIAH.png')  }}" alt=""></a>
                </div>
            </div>

            <!-- Dekstop Menu" -->
            <div class="w-full md:flex md:items-center md:justify-between md:inline-block hidden">
                <div class="flex flex-col px-2 py-3 -mx-4 md:flex-row md:mx-0 md:py-0">
                    <a href="/" class="px-2 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">Beranda</a>
                    <a href="/dokumen" class="px-2 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">Dokumen</a>
                    <a href="/galeri" class="px-2 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">Galeri</a>
                    <a href="#" class="px-2 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">SOP</a>
                    <a href="/laporan-kinerja" class="px-2 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">Laporan Kinerja</a>
                    <a href="#" class="px-2 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">Kontak</a>
                    <!-- Navbar -->
                    <div class="group inline-block hidden sm:block">
                        <button
                          class="outline-none focus:outline-none px-2 pb-2 bg-white rounded-sm flex justify-start items-center min-w-32"
                        >
                          <span class="px-1 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">Kontrak Kinerja</span>
                          <span>
                            <svg
                              class="fill-current h-4 w-4 transform group-hover:-rotate-180
                              transition duration-150 ease-in-out"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                              />
                            </svg>
                          </span>
                        </button>
                        <ul
                          class="bg-white shadow rounded-md transform scale-0 group-hover:scale-100 absolute 
                        transition duration-150 ease-in-out origin-top min-w-32"
                        >
                          <li class="rounded-sm px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                          <a href="#">
                            KK Dekan dan Rektor
                          </a> </li>
                          <li class="rounded-sm px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                          <a href="#">
                            KK Dekan dan Prodi
                          </a>  
                          </li>
                          <li class="rounded-sm px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                          <a href="#">
                            Tahun
                          </a>  
                          </li>
                        </ul>
                      </div>
                      
                      <style>
                        /* since nested groupes are not supported we have to use 
                           regular css for the nested dropdowns 
                        */
                        li>ul                 { transform: translatex(100%) scale(0) }
                        li:hover>ul           { transform: translatex(101%) scale(1) }
                        li > button svg       { transform: rotate(-90deg) }
                        li:hover > button svg { transform: rotate(-270deg) }
                      
                        /* Below styles fake what can be achieved with the tailwind config
                           you need to add the group-hover variant to scale and define your custom
                           min width style.
                             See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
                             for implementation with config file
                        */
                        .group:hover .group-hover\:scale-100 { transform: scale(1) }
                        .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
                        .scale-0 { transform: scale(0) }
                        .min-w-32 { min-width: 8rem }
                      </style>
                      <!-- End Navbar -->

                       <!-- Navbar IKU -->
                    <div class="group sm:inline-block hidden">
                              <button
                                class="outline-none focus:outline-none px-2 pb-2 bg-white rounded-sm flex justify-start items-center min-w-32"
                              >
                                <span class="px-1 py-1 text-lg font-semibold text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-200 md:mx-2">IKU</span>
                                <span>
                                  <svg
                                    class="fill-current h-4 w-4 transform group-hover:-rotate-180
                                    transition duration-150 ease-in-out"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                  >
                                    <path
                                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                    />
                                  </svg>
                                </span>
                              </button>
                              <ul
                                class="bg-white shadow rounded-md transform scale-0 group-hover:scale-100 absolute 
                              transition duration-150 ease-in-out origin-top min-w-32"
                              >
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
                                  <button
                                    class="w-full text-left flex items-center outline-none focus:outline-none"
                                  >
                                    <span class="pr-1 flex-1 text-lg font-semibold text-gray-700">Tahun</span>
                                    <span class="mr-auto">
                                      <svg
                                        class="fill-current h-4 w-4
                                        transition duration-150 ease-in-out"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                      >
                                        <path
                                          d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                        />
                                      </svg>
                                    </span>
                                  </button>
                                  <ul
                                    class="bg-white shadow rounded-md absolute top-0 right-0 
                              transition duration-150 ease-in-out origin-top-left
                              min-w-32
                              "
                                  >
                                    <li class="px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                                      <a href="#">
                                        Triwulan 1
                                      </a>
                                    </li>
                                    <li class="px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                                      <a href="#">
                                        Triwulan 2
                                      </a>
                                    </li>
                                    <li class="px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                                      <a href="#">
                                        Triwulan 3
                                      </a>
                                    </li>
                                    <li class="px-3 py-1 hover:bg-gray-100 text-lg font-semibold text-gray-700">
                                      <a href="#">
                                        Triwulan 4
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                    </div>
                            
                            <style>
                              /* since nested groupes are not supported we have to use 
                                regular css for the nested dropdowns 
                              */
                              li>ul                 { transform: translatex(100%) scale(0) }
                              li:hover>ul           { transform: translatex(101%) scale(1) }
                              li > button svg       { transform: rotate(-90deg) }
                              li:hover > button svg { transform: rotate(-270deg) }
                            
                              /* Below styles fake what can be achieved with the tailwind config
                                you need to add the group-hover variant to scale and define your custom
                                min width style.
                                  See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
                                  for implementation with config file
                              */
                              .group:hover .group-hover\:scale-100 { transform: scale(1) }
                              .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
                              .scale-0 { transform: scale(0) }
                              .min-w-32 { min-width: 8rem }
                            </style>
                      <!-- End Navbar -->
                </div>
                
                <div class="relative hidden sm:hidden ">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-700" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>

                    <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-full dark:bg-gray-800 dark:text-gray-500 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Search">
                </div>
            </div>


             <!-- Mobile menu -->
              <div class="w-full md:hidden">
               <!-- component -->
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
                  <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                      <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img class="h-26 w-48" src="{{ asset('assets/img/Logo SP4 FISIP UNSYIAH.png') }}" alt=""></a>
                      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </div>
                    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Beranda</a>
                      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/dokumen">Dokumen</a>
                      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galeri">Galeri</a>
                      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">SOP</a>
                      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/laporan-kinerja">Laporan Kinerja</a>
                      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Kontak</a>


                        <!-- Menu Kontrak Kinerja -->
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                          <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>Kontrak Kinerja</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                          </button>
                          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">KK Dekan dan Rektor</a>
                              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">KK Dekan dan Prodi</a>
                              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Tahun</a>
                            </div>
                          </div>
                         
                        </div>
                       <!-- Menu IKU -->
                       <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                          <span>IKU</span>
                          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>Tahun</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                              </button>
                              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Triwulan 1</a>
                                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Triwulan 2</a>
                                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Triwulan 3</a>
                                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Triwulan 4</a>
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- End Menu -->

                      
                    </nav>
                  </div>
                </div> 

            </div>
            <!-- End Mobile -->
        </div>
    </nav>

    
    
    {{ $slot }}

    <!-- Footer -->
    <footer class="bg-white pt-10 sm:mt-10 pt-10 ">
      <div class="max-w-6xl m-auto text-gray-900 flex flex-wrap justify-left border-t border-gray-300">
      <!-- Copyright Bar --> 
      <div class="pt-2 w-full">
          <div class="flex justify-center pb-5 px-3 m-auto pt-5 
               text-gray-900 text-sm font-semibold
              flex-col md:flex-row max-w-full">
              <div class="mt-2">
                  © Copyright 2021. All Rights Reserved.
                  Designed by Hary Rachmat
              </div>
  
             
          </div>
      </div>
  </footer>
  <livewire:scripts />
</body>
</html>