<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center gap-x-1">
            <a href="/dashboard" class="font-normal text-lg text-slate-400 leading-tight">
                {{ __('Dashboard') }}
            </a>
            <p>/</p>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                {{ __('Tambah Data') }}
            </h2>
        </div>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </x-slot>
    <div class="px-4 md:px-12 py-6">
        <div class="w-fit px-4 py-2 fixed bottom-4 right-4 bg-gray-600 rounded-lg shadow-lg flex flex-row-reverse items-center gap-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
            </svg>   
            <a href="#" class="text-sm text-white">Kembali keatas</a>
        </div>
        <form action="" method="POST" class="w-full flex p-4 flex-col space-y-4 bg-white rounded-lg py-2 shadow-md">
            <div id="owner">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2">IDENTITAS PEMILIK KENDARAAN</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik</label>
                        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Pemilik</label>
                        <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required>
                    </div>
                </div>
            </div>
            <div id="vehicle">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2">IDENTITAS KENDARAAN BERMOTOR</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="no_uji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Uji Kendaraan</label>
                        <input type="text" id="no_uji" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No Uji Kendaraan" required>
                    </div>
                    <div>
                        <label for="sertifikasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor dan Tanggal Sertifikat Registrasi</label>
                        <input type="text" id="sertifikasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor dan Tanggal Sertifikat Registrasi" required>
                    </div>
                    <div>
                        <label for="reg_kendaraan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Registrasi Kendaraan</label>
                        <input type="text" id="reg_kendaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Registrasi Kendaraan" required>
                    </div>
                    <div>
                        <label for="rangka_kendaraan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rangka Kendaraan</label>
                        <input type="text" id="rangka_kendaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Rangka Kendaraan" required>
                    </div>
                    <div>
                        <label for="no_penggerak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Motor Penggerak</label>
                        <input type="text" id="no_penggerak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Motor Penggerak" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="no_uji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Depan</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 
                    </div>
                    <div>
                        <label for="no_uji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Belakang</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 
                    </div>
                    <div>
                        <label for="no_uji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Kiri</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 
                    </div>
                    <div>
                        <label for="no_uji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Kanan</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 
                    </div>
                </div>
            </div>
            <div id="specification">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2">SPESIFIKASI TEKNIS KENDARAAN BERMOTOR</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                        <input type="text" id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jenis" required>
                    </div>
                    <div>
                        <label for="merk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk / Tipe</label>
                        <input type="text" id="merk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Merk / Tipe" required>
                    </div>
                    <div>
                        <label for="perakitan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Pembuatan / Perakitan</label>
                        <input type="text" id="perakitan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tahun Pembuatan / Perakitan" required>
                    </div>
                    <div>
                        <label for="energi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan Bakar / Sumber Energi</label>
                        <input type="text" id="energi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bahan Bakar / Sumber Energi" required>
                    </div>
                    <div>
                        <label for="daya_motor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daya Motor</label>
                        <input type="text" id="daya_motor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Daya Motor" required>
                    </div>
                    <div>
                        <label for="uk_ban" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran Ban</label>
                        <input type="text" id="uk_ban" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ukuran Ban" required>
                    </div>
                    <div>
                        <label for="sumbu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfigurasi Sumbu</label>
                        <input type="text" id="sumbu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Konfigurasi Sumbu" required>
                    </div>
                    <div>
                        <label for="b_kosong" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Kosong Kendaraan</label>
                        <input type="text" id="b_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berat Kosong Kendaraan" required>
                    </div>
                </div>
            </div>
            <div id="dimensi">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2 uppercase">Dimensi utama kendaraan bermotor</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="panjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Panjang</label>
                        <input type="text" id="panjang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Panjang" required>
                    </div>
                    <div>
                        <label for="lebar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lebar</label>
                        <input type="text" id="lebar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lebar / Tipe" required>
                    </div>
                    <div>
                        <label for="tinggi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi</label>
                        <input type="text" id="tinggi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tinggi" required>
                    </div>
                    <div>
                        <label for="julur_depan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Julur Depan</label>
                        <input type="text" id="julur_depan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Julur Depan" required>
                    </div>
                    <div>
                        <label for="julur_belakang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Julur Belakang</label>
                        <input type="text" id="julur_belakang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Julur Belakang" required>
                    </div>
                </div>
            </div>
            <div id="sumbu">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2 uppercase">Jarak Sumbu</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="sumbu12" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sumbu I - II</label>
                        <input type="text" id="sumbu12" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sumbu I - II" required>
                    </div>
                    <div>
                        <label for="sumbu23" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sumbu II - III</label>
                        <input type="text" id="sumbu23" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sumbu II - III" required>
                    </div>
                    <div>
                        <label for="Sumbu34" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sumbu III - IV</label>
                        <input type="text" id="Sumbu34" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sumbu III - IV" required>
                    </div>
                </div>
            </div>
            <div id="dimensi_muatan">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2 uppercase">Dimensi bak muatan / tangki</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="plt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Panjang x Lebar x Tinggi</label>
                        <input type="text" id="plt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Panjang x Lebar x Tinggi" required>
                    </div>
                    <div>
                        <label for="jbb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JBB / JBKB</label>
                        <input type="text" id="jbb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="JBB / JBKB" required>
                    </div>
                    <div>
                        <label for="jbi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JBI / JBKI</label>
                        <input type="text" id="jbi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="JBI / JBKI" required>
                    </div>
                    <div>
                        <label for="daya_angkut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daya angkut (orang / kg)</label>
                        <input type="text" id="daya_angkut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Daya angkut (orang / kg)" required>
                    </div>
                    <div>
                        <label for="terendah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas jalan terendah yang boleh dilalui</label>
                        <input type="text" id="terendah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kelas jalan terendah yang boleh dilalui" required>
                    </div>
                </div>
            </div>
            <div id="hasil_uji">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2 uppercase">KETERANGAN HASIL UJI</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="rem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rem Utama</label>
                        <input type="text" id="rem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rem Utama" required>
                    </div>
                    <div>
                        <label for="rem1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rem Utama Sumbu I</label>
                        <input type="text" id="rem1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rem Utama Sumbu I" required>
                    </div>
                    <div>
                        <label for="rem2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rem Utama Sumbu II</label>
                        <input type="text" id="rem2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rem Utama Sumbu II" required>
                    </div>
                    <div>
                        <label for="rem3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rem Utama Sumbu III</label>
                        <input type="text" id="rem3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rem Utama Sumbu III" required>
                    </div>
                    <div>
                        <label for="rem4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rem Utama Sumbu IV</label>
                        <input type="text" id="rem4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rem Utama Sumbu IV" required>
                    </div>
                    <div>
                        <label for="luka" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampu Utama Kanan</label>
                        <input type="text" id="luka" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lampu Utama Kanan" required>
                    </div>
                    <div>
                        <label for="luki" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampu Utama Kiri</label>
                        <input type="text" id="luki" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lampu Utama Kiri" required>
                    </div>
                    <div>
                        <label for="lupka" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampu Utama Penyimpangan Kanan</label>
                        <input type="text" id="lupka" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lampu Utama Penyimpangan Kanan" required>
                    </div>
                    <div>
                        <label for="lupki" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampu Utama Penyimpangan Kiri</label>
                        <input type="text" id="lupki" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lampu Utama Penyimpangan Kiri" required>
                    </div>
                    <div>
                        <label for="em_co" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emisi CO</label>
                        <input type="text" id="em_co" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Emisi CO" required>
                    </div>
                    <div>
                        <label for="em_hc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emisi HC</label>
                        <input type="text" id="em_hc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Emisi HC" required>
                    </div>
                    <div>
                        <label for="keas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketebalan Asap</label>
                        <input type="text" id="keas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ketebalan Asap" required>
                    </div>
                </div>
            </div>
            <div id="lainnya">
                <h5 class="text-lg font-semibold border-b mt-2 pb-2 uppercase">KETERANGAN LAInnya</h5>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <select id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>LULUS UJI BERKALA</option>
                            <option>TIDAK LULUS UJI BERKALA</option>
                        </select>
                    </div>
                    <div>
                        <label for="masa_berlaku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masa berlaku uji berkala</label>
                        <input type="text" id="masa_berlaku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masa berlaku uji berkala" required>
                    </div>
                    <div>
                        <label for="penguji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Petugas Penguji</label>
                        <input type="text" id="penguji" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Petugas Penguji" required>
                    </div>
                    <div>
                        <label for="nrp_petugas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRP Petugas Penguji</label>
                        <input type="text" id="nrp_petugas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NRP Petugas Penguji" required>
                    </div>
                    <div>
                        <label for="kadin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala Dinas</label>
                        <input type="text" id="kadin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Kepala Dinas" required>
                    </div>
                    <div>
                        <label for="pakadin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat Kepala Dinas</label>
                        <input type="text" id="pakadin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pangkat Kepala Dinas" required>
                    </div>
                    <div>
                        <label for="nip_kadin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP Kepala Dinas</label>
                        <input type="text" id="nip_kadin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIP Kepala Dinas" required>
                    </div>
                    <div>
                        <label for="pelaksana" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit Pelaksana Teknis Daerah Pengujian</label>
                        <input type="text" id="pelaksana" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Unit Pelaksana Teknis Daerah Pengujian" required>
                    </div>
                    <div>
                        <label for="nadir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Direktur</label>
                        <input type="text" id="nadir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Direktur" required>
                    </div>
                    <div>
                        <label for="padir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat Direktur</label>
                        <input type="text" id="padir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pangkat Direktur" required>
                    </div>
                    <div>
                        <label for="nip_dir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP Direktur</label>
                        <input type="text" id="nip_dir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIP Direktur" required>
                    </div>
                    <div>
                        <label for="wiluji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Numpang Uji</label>
                        <input type="text" id="wiluji" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Wilayah Numpang Uji" required>
                    </div>
                    <div>
                        <label for="asal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Asal</label>
                        <input type="text" id="asal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Wilayah Asal" required>
                    </div>
                </div>
            </div>
            <div class="flex flex-col space-y-2">
                <button type="submit" class="w-full py-2 rounded-md bg-indigo-600 text-white">Tambah Data</button>
                <a href="/dashboard" class="w-full py-2 rounded-md bg-gray-200 text-black text-center">Batalkan</a>
            </div>
        </form>
    </div>
</x-app-layout>