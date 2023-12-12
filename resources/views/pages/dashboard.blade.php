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
                            Identitas Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataUji as $key => $item)
                        <tr class="bg-white border-b text-black">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nama_pemilik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->alamat_pemilik }}
                            </td>
                            <td class="px-6 py-4">
                                <button data-modal-target="default-modal-{{ $item->id }}" data-modal-toggle="default-modal-{{ $item->id }}" class="block p-2 text-xs text-black font-medium rounded-md bg-gray-200" type="button">
                                    Lihat Detail
                                </button>
                                <div id="default-modal-{{ $item->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed z-50 mx-auto items-center w-fit h-fit inset-0 mt-10 rounded-md bg-white">
                                    <div>
                                        <div class="grid grid-cols-1 w-full h-[32rem]">
                                            <!-- Modal content -->
                                            <div class="relative">
                                            <!-- Content-1 -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                                <h3 class="text-xl font-semibold text-black">
                                                    IDENTITAS KENDARAAN
                                                </h3>
                                            </div>
                                            <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nomor Uji Kendaraan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->no_uji_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nomor dan Tanggal Sertifikat Registrasi</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->no_sertifikat_registrasi }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nomor Registrasi Kendaraan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->no_registrasi_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nomor Rangka Kendaraan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->no_rangka_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nomor Motor Penggerak</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->no_motor_penggerak }}</p>
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
                                                    <img src="{{ asset('storage/'.$item->foto_depan) }}" class="w-96">
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Foto Belakang</h5>
                                                    <img src="{{ asset('storage/'.$item->foto_belakang) }}" class="w-96">
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Foto Kiri</h5>
                                                    <img src="{{ asset('storage/'.$item->foto_kiri) }}" class="w-96">
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Foto Kanan</h5>
                                                    <img src="{{ asset('storage/'.$item->foto_kanan) }}" class="w-96">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="relative">
                                            {{-- Content-1 --}}
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                                <h3 class="text-xl font-semibold text-black">
                                                    SPESIFIKASI KENDARAAN
                                                </h3>
                                            </div>
                                            <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Jenis</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->jenis_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Merk / Tipe</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->merk_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Tahun Pembuatan / Perakitan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->tahun_pembuatan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Bahan Bakar / Sumber Energi</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->bahan_bakar }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Isi Silinder</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->isi_silinder }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Daya Motor</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->daya_motor }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Ukuran Ban</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->ukuran_ban }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Konfigurasi Sumbu</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->konfigurasi_sumbu }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Berat Kosong Kendaraan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->berat_kosong }}</p>
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
                                                    <p class="text-sm font-normal text-black">{{ $item->panjang_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Lebar</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->lebar_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Tinggi</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->tinggi_kendaraan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Julur Depan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->julur_depan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Julur Belakang</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->julur_belakang }}</p>
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
                                                    <p class="text-sm font-normal text-black">{{ $item->sumbu_satu_dua }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Sumbu II - III</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->sumbu_dua_tiga }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Sumbu III - IV</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->sumbu_tiga_empat }}</p>
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
                                                    <p class="text-sm font-normal text-black">{{ $item->pjg_lbr_tinggi }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">JBB / JBKB</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->jbb }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">JBI / JBKI</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->jbi }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Daya angkut (orang / kg)</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->daya_angkut }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Kelas jalan terendah yang boleh dilalui</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->kelas_rendah }}</p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="relative">
                                            <!-- Content-1 -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                                <h3 class="text-xl font-semibold text-black">
                                                    KETERANGAN HASIL UJI
                                                </h3>
                                            </div>
                                            <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Rem Utama</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->rem_utama }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Rem Utama Sumbu I</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->rem_utama_satu }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Rem Utama Sumbu II</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->rem_utama_dua }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Rem Utama Sumbu III</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->rem_utama_tiga }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Rem Utama Sumbu IV</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->rem_utama_empat }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Lampu Utama Kanan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->lampu_utama_kanan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Lampu Utama Kiri</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->lampu_utama_kiri }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Lampu Utama Penyimpangan Kanan</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->lampu_simpang_utama_kanan }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Lampu Utama Penyimpangan Kiri</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->lampu_simpang_utama_kiri }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Emisi CO</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->emisi_co }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Emisi HC</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->emisi_hc }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Ketebalan Asap</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->ketebalan_asap }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">KETERANGAN</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->keterangan_uji_berkala }}</p>
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
                                                    <h5 class="text-md font-semibold text-black">Masa berlaku uji berkala</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->masa_berlaku }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nama Petugas Penguji</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->nama_penguji }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">NRP Petugas Penguji</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->nrp_penguji }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nama Kepala Dinas</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->nama_kepala_dinas }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Pangkat Kepala Dinas</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->pangkat_kepala_dinas }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">NIP Kepala Dinas</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->nip_kepala_dinas }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Unit Pelaksana Teknis Daerah Pengujian</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->uptd_penguji }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Nama Direktur</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->nama_direktur }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Pangkat Direktur</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->pangkat_direktur }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">NIP Direktur</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->nip_direktur }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Wilayah Numpang Uji</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->wilayah_uji }}</p>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h5 class="text-md font-semibold text-black">Wilayah Asal</h5>
                                                    <p class="text-sm font-normal text-black">{{ $item->wilayah_asal }}</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <button data-modal-hide="default-modal-{{ $item->id }}" type="button" class="fixed top-0 right-0 w-fit h-fit text-white bg-gray-600 font-medium rounded-lg text-sm p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                              </svg>                                              
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex flex-row items-center gap-x-2">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown-{{ $item->id }}" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>                                      
                                </button>
                                <div id="dropdown-{{ $item->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                          <a href="/template/{{ $item->nama_pemilik }}" target="_blank" class="block px-4 py-2 hover:bg-gray-100">Lihat</a>
                                        </li>
                                        <li>
                                          <a href="{{ route('download', ['name' => $item->nama_pemilik]) }}" target="_blank" class="block px-4 py-2 hover:bg-gray-100">Download</a>
                                        </li>
                                        <li>
                                          <a href="/edit" class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('delete', ['id' => $item->id]) }}" class="block px-4 py-2 hover:bg-gray-100">Hapus</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b text-black">
                            <td colspan="7" class="px-6 py-4 text-center">
                                Tidak ada data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
