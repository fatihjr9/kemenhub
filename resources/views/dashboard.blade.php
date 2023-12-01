<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </x-slot>

    <div class="px-4 md:px-12 py-6">
        <div class="flex flex-row justify-end bg-white px-6 py-3 sm:rounded-tr-lg sm:rounded-tl-lg">
            <a href="/add-data" class="text-right w-fit p-2 bg-indigo-600 text-white rounded-md text-sm font-medium">
                Tambahkan data
            </a>
        </div>
        <div class="overflow-x-auto sm:rounded-br-lg sm:rounded-bl-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-black uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Masa Berlaku Uji
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Identitas Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Spesifikasi Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan Hasil Uji
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b text-black">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Yanto
                        </td>
                        <td class="px-6 py-4">
                            Semarang
                        </td>
                        <td class="px-6 py-4">
                            32 Desember 2080
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="default-modal-1" data-modal-toggle="default-modal-1" class="block p-2 text-xs text-black font-medium rounded-md bg-gray-200" type="button">
                                Lihat Detail
                            </button>
                            <div id="default-modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Content-1 -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-black">
                                                IDENTITAS KENDARAAN
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nomor Uji Kendaraan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nomor dan Tanggal Sertifikat Registrasi</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nomor Registrasi Kendaraan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nomor Rangka Kendaraan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nomor Motor Penggerak</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                        <!-- Content-2 -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-black">
                                                Gambar Kendaraan
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Foto Depan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Foto Belakang</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Foto Kiri</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Foto Kanan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="default-modal-2" data-modal-toggle="default-modal-2" class="block p-2 text-xs text-black font-medium rounded-md bg-gray-200" type="button">
                                Lihat Detail
                            </button>
                            <div id="default-modal-2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- Content-1 --}}
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-black">
                                                SPESIFIKASI KENDARAAN
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Jenis</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Merk / Tipe</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Tahun Pembuatan / Perakitan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Bahan Bakar / Sumber Energi</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Isi Silinder</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Daya Motor</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Ukuran Ban</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Konfigurasi Sumbu</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Berat Kosong Kendaraan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                        {{-- Content-2 --}}
                                        <div class="flex items-center justify-between p-4 md:p-5 border-y rounded-t">
                                            <h3 class="text-xl font-semibold text-black uppercase">
                                                Dimensi utama kendaraan bermotor
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Panjang</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Lebar</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Tinggi</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Julur Depan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Julur Belakang</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                        {{-- Content-3 --}}
                                        <div class="flex items-center justify-between p-4 md:p-5 border-y rounded-t">
                                            <h3 class="text-xl font-semibold text-black uppercase">
                                                Jarak Sumbu
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Sumbu I-II</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Sumbu II - III</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Sumbu III - IV</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                        {{-- Content-4 --}}
                                        <div class="flex items-center justify-between p-4 md:p-5 border-y rounded-t">
                                            <h3 class="text-xl font-semibold text-black uppercase">
                                                Dimensi bak muatan / tangki
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Panjang x Lebar x Tinggi</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">JBB / JBKB</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">JBI / JBKI</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Daya angkut (orang / kg)</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Kelas jalan terendah yang boleh dilalui</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="default-modal-3" data-modal-toggle="default-modal-3" class="block p-2 text-xs text-black font-medium rounded-md bg-gray-200" type="button">
                                Lihat Detail
                            </button>
                            <div id="default-modal-3" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Content-1 -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-black">
                                                KETERANGAN HASIL UJI
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Rem Utama</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Rem Utama Sumbu I</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Rem Utama Sumbu II</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Rem Utama Sumbu III</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Rem Utama Sumbu IV</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Lampu Utama Kanan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Lampu Utama Kiri</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Lampu Utama Penyimpangan Kanan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Emisi CO</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Emisi HC</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Ketebalan Asap</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">KETERANGAN</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                        {{-- Content-2 --}}
                                        <div class="flex items-center justify-between p-4 md:p-5 border-y rounded-t">
                                            <h3 class="text-xl font-semibold text-black uppercase">
                                                Keterangan
                                            </h3>
                                        </div>
                                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Keterangan</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Masa berlaku uji berkala</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nama Petugas Penguji</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">NRP Petugas Penguji</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nama Kepala Dinas</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Pangkat Kepala Dinas</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nama Kepala Dinas</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">NIP Kepala Dinas</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Unit Pelaksana Teknis Daerah Pengujian</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Nama Direktur</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Pangkat Direktur</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">NIP Direktur</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Wilayah Numpang Uji</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h5 class="text-md font-semibold text-black">Wilayah Asal</h5>
                                                <p class="text-sm font-normal text-black">Nomor Uji Kendaraan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 flex flex-row items-center gap-x-2">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>                                      
                            </button>
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                  <li>
                                    <a href="/view" class="block px-4 py-2 hover:bg-gray-100">Lihat</a>
                                  </li>
                                  <li>
                                    <a href="/download" class="block px-4 py-2 hover:bg-gray-100">Download</a>
                                  </li>
                                  <li>
                                    <a href="/edit" class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                                  </li>
                                  <li>
                                    <a href="/delete" class="block px-4 py-2 hover:bg-gray-100">Hapus</a>
                                  </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
