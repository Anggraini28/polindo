<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Peserta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <div class="mx-auto">
                        <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Pilihan Paket</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Data Pribadi</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Data Orang Tua</button>
                                </li>
                                <li role="presentation">
                                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Sekolah</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <section class="bg-white dark:bg-gray-900">
                                    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                                        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                                            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pendaftaran Polindo Internasional</h2>
                                            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Pilih paket dan jurusan yang Anda inginkan.</p>
                                        </div>
                                        <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">
                                            <!-- Pricing Card -->
                                            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                                <h3 class="mb-4 text-2xl font-semibold">Freetest</h3>
                                                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                                                <div class="flex justify-center items-baseline my-8">
                                                    <span class="mr-2 text-5xl font-extrabold">$29</span>
                                                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                                                </div>
                                                <!-- List -->
                                                <ul role="list" class="mb-8 space-y-4 text-left">
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Individual configuration</span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>No setup, or hidden fees</span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Team size: <span class="font-semibold">1 developer</span></span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Premium support: <span class="font-semibold">6 months</span></span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Free updates: <span class="font-semibold">6 months</span></span>
                                                    </li>
                                                </ul>
                                                <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Get started</a>
                                            </div>
                                            <!-- Pricing Card -->
                                            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                                <h3 class="mb-4 text-2xl font-semibold">Reguler</h3>
                                                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Relevant for multiple users, extended & premium support.</p>
                                                <div class="flex justify-center items-baseline my-8">
                                                    <span class="mr-2 text-5xl font-extrabold">$99</span>
                                                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                                                </div>
                                                <!-- List -->
                                                <ul role="list" class="mb-8 space-y-4 text-left">
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Individual configuration</span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>No setup, or hidden fees</span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Team size: <span class="font-semibold">10 developers</span></span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Premium support: <span class="font-semibold">24 months</span></span>
                                                    </li>
                                                    <li class="flex items-center space-x-3">
                                                        <!-- Icon -->
                                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                        <span>Free updates: <span class="font-semibold">24 months</span></span>
                                                    </li>
                                                </ul>
                                                <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Get started</a>
                                            </div>
                                        </div>
                                    </div>
                                    </section> 
                            </div>
                            <div class="p-4 rounded-lg dark:bg-gray-800 hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="#">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                            <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                            <input type="date" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                                        </div>
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Silahkan dipilih</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Silahkan dipilih</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                            <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                        <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div>
                                </form>
                            </div>
                            <div class="p-4 rounded-lg dark:bg-gray-800 hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <form action="#">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ayah Kandung</label>
                                            <input type="text" name="namaayah" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ibu Kandung</label>
                                            <input type="text" name="namaibu" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                            <div class="flex">
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                    <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                    <option value="L">Kakak</option>
                                                    <option value="P">Adik</option>
                                                </select>
                                                <input type="text" name="saudara1" id="saudara1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                            <div class="flex">
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                    <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                    <option value="L">Kakak</option>
                                                    <option value="P">Adik</option>
                                                </select>
                                                <input type="text" name="saudara2" id="saudara2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                            <div class="flex">
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                    <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                    <option value="L">Kakak</option>
                                                    <option value="P">Adik</option>
                                                </select>
                                                <input type="text" name="saudara3" id="saudara3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                            <div class="flex">
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                    <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                    <option value="L">Kakak</option>
                                                    <option value="P">Adik</option>
                                                </select>
                                                <input type="text" name="saudara4" id="saudara4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                            <div class="flex">
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                    <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                    <option value="L">Kakak</option>
                                                    <option value="P">Adik</option>
                                                </select>
                                                <input type="text" name="saudara5" id="saudara5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                            </div>
                                        </div>

                                    </div>
                                        <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div>
                                </form>  
                            </div>
                            <div class="p-4 rounded-lg dark:bg-gray-800 hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                               <form action="#">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah Asal</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Sekolah Asal" required="">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Sekolah Asal</label>
                                            <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Sekolah Asal"></textarea>
                                        </div>
                                        <div class="w-full">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan Sekolah Asal</label>
                                            <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Induk Siswa Sekolah Asal</label>
                                            <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                        </div>
                                        <div class="w-full">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Foto</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>
                                        <div class="w-full">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Rapor Terakhir</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>
                                        <div class="w-full">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Ijazah</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>
                                        
                                    </div>
                                        <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


