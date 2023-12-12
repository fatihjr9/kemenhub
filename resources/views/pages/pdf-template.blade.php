<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uji Emisi milik {{ $dataUji->nama_pemilik }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body>
    <style>
        body {
            overflow-x: hidden;
        }
        .bg-template {
            background-image: url("https:blogger.googleusercontent.com/img/a/AVvXsEiAtNncceZ59S_n0HKJaxD1XB6Ky65Rm_e8X2AlgVmKrXAU2vm_mHCN0xgYE8MNywsX-R-UTmuD6d6HofNtTGYOuLVnEahsforZFxJ0iQxQPpBbCvOHOAB716082P9AraE518ZGJSV2joUg0LOKqrj9y5n8-V7pu_-KeDNyhxupfn76ikKIj3PTBGiP=s1600");
            background-position: center;
            object-fit: cover;
            background-repeat: no-repeat;
        }
        .bg-light {
            background-color: #edf2ff;
            width: 36rem;
        }
    </style>
    <div class="bg-template"></div>
    <div>
        <div class="bg-light px-4 py-8 mx-auto">
            <div class="p-4" style="background-color:#f4f5fa;">
                <div style="width: 24rem; margin-right:auto;">
                    <div class="text-center space-y-2 mb-10">
                        <h5 class="text-xl">UJI BERKALA KENDARAAN <br> BERMOTOR</h5>
                        @if($dataUji->masa_berlaku)
                            <h5 class="text-xl font-bold text-green-300">Hasil Uji Masih Berlaku</h5>
                        @else
                            <h5 class="text-xl">Hasil Uji Tidak Berlaku</h5>
                        @endif
                        <h5 class="text-xl">(Numpang Uji)</h5>
                        <h5 class="text-xl font-semibold">Masa Berlaku Uji : {{ $dataUji->masa_berlaku }}</h5>
                    </div>
                    {{-- content-1 --}}
                    <div style="margin-bottom: 1rem;">
                        <h5 style="margin-bottom: 1rem; font-weight:500;">IDENTITAS PEMILIK KENDARAAN</h5>
                        <div style="display:grid; grid-template-rows:1fr 1fr; align-items:flex-start; background-color:white; height:fit-content;">
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Nama <br> Pemilik</h5>
                                <p>: {{ $dataUji->nama_pemilik }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem;">
                                <h5>Alamat <br> Pemilik</h5>
                                <p>: {{ $dataUji->alamat_pemilik }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- content-2 --}}
                    <div style="margin-bottom: 1rem;">
                        <h5 style="margin-bottom: 1rem; font-weight:500;">IDENTITAS KENDARAAN BERMOTOR</h5>
                        <div style="display:grid; grid-template-rows:1fr 1fr; align-items:flex-start; background-color:white; height:fit-content;">
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Nomor Uji <br> Kendaraan</h5>
                                <p>: {{ $dataUji->no_uji_kendaraan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Nomor dan <br> Tanggal Sertifikat <br> Registrasi</h5>
                                <p>: {{ $dataUji->no_sertifikat_registrasi }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Nomor Registrasi <br> Kendaraan</h5>
                                <p>: {{ $dataUji->no_registrasi_kendaraan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Nomor Rangka <br> Kendaraan</h5>
                                <p>: {{ $dataUji->no_rangka_kendaraan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Nomor Motor <br> Penggerak</h5>
                                <p>: {{ $dataUji->no_motor_penggerak }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- content-3 --}}
                    <div style="margin-bottom: 1rem;">
                        <div style="display:flex; flex-direction:column; background-color:white; height:fit-content; margin-bottom:1rem;">
                            <h5 style="margin-bottom: 1rem; font-weight:500; margin:1rem 0; text-align:center;">FOTO DEPAN</h5>
                            <div style="padding:1rem;">
                                <img src="{{ Storage::url('public/img/').$dataUji->foto_depan }}" style="width:100%;">
                            </div>
                        </div>
                        <div style="display:flex; flex-direction:column; background-color:white; height:fit-content; margin-bottom:1rem;">
                            <h5 style="margin-bottom: 1rem; font-weight:500; margin:1rem 0; text-align:center;">FOTO BELAKANG</h5>
                            <div style="padding:1rem;">
                                <img src="{{ Storage::url('public/img/').$dataUji->foto_belakang }}" style="width:100%;">
                            </div>
                        </div>
                        <div style="display:flex; flex-direction:column; background-color:white; height:fit-content; margin-bottom:1rem;">
                            <h5 style="margin-bottom: 1rem; font-weight:500; margin:1rem 0; text-align:center;">FOTO KANAN</h5>
                            <div style="padding:1rem;">
                                <img src="{{ Storage::url('public/img/').$dataUji->foto_kanan }}" style="width:100%;">
                            </div>
                        </div>
                        <div style="display:flex; flex-direction:column; background-color:white; height:fit-content; margin-bottom:1rem;">
                            <h5 style="margin-bottom: 1rem; font-weight:500; margin:1rem 0; text-align:center;">FOTO KIRI</h5>
                            <div style="padding:1rem;">
                                <img src="{{ Storage::url('public/img/').$dataUji->foto_kiri }}" style="width:100%;">
                            </div>
                        </div>
                    </div>
                    {{-- content-4 --}}
                    <div style="margin-bottom: 1rem;">
                        <h5 style="margin-bottom: 1rem; font-weight:500;">SPESIFIKASI TEKNIS KENDARAAN BERMOTOR</h5>
                        <div style="display:grid; grid-template-rows:1fr 1fr; align-items:flex-start; background-color:white; height:fit-content;">
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Jenis</h5>
                                <p>: {{ $dataUji->no_uji_kendaraan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Merk / Tipe</h5>
                                <p>: {{ $dataUji->no_sertifikat_registrasi }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Tahun Pembuatan / <br> Perakitan</h5>
                                <p>: {{ $dataUji->no_registrasi_kendaraan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Bahan Bakar / <br> Sumber Energi</h5>
                                <p>: {{ $dataUji->no_rangka_kendaraan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Isi Silinder</h5>
                                <p>: {{ $dataUji->no_motor_penggerak }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Daya Motor</h5>
                                <p>: {{ $dataUji->no_motor_penggerak }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Ukuran Ban</h5>
                                <p>: {{ $dataUji->no_motor_penggerak }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Konfigurasi Sumbu</h5>
                                <p>: {{ $dataUji->no_motor_penggerak }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Berat Kosong <br> Kendaraan</h5>
                                <p>: {{ $dataUji->no_motor_penggerak }}</p>
                            </div>
                            {{-- spacer --}}
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Dimensi utama <br> kendaraan <br> bermotor</h5>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr 1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Panjang</h5>
                                    <p>: {{ $dataUji->panjang_kendaraan }}</p>
                                </div>
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Julur Depan</h5>
                                    <p>: {{ $dataUji->julur_depan }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr 1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Lebar</h5>
                                    <p>: {{ $dataUji->lebar_kendaraan }}</p>
                                </div>
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Julur Belakang</h5>
                                    <p>: {{ $dataUji->julur_belakang }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr 1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Tinggi</h5>
                                    <p>: {{ $dataUji->tinggi_kendaraan }}</p>
                                </div>
                            </div>
                            {{-- spacer --}}
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Jarak Sumbu</h5>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5> Sumbu <br>
                                        I - II</h5>
                                    <p>: {{ $dataUji->sumbu_satu_dua }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5> Sumbu <br>
                                        II - III</h5>
                                    <p>: {{ $dataUji->sumbu_dua_tiga }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5> Sumbu <br>
                                        III - IV</h5>
                                    <p>: {{ $dataUji->sumbu_tiga_empat }}</p>
                                </div>
                            </div>
                            {{-- spacer --}}
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Dimensi bak <br> muatan / tangki</h5>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5> Panjang <br> x Lebar x <br> Tinggi</h5>
                                    <p>: {{ $dataUji->pjg_lbr_tinggi }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>JBB / JBKB</h5>
                                    <p>: {{ $dataUji->jbb }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>JBI / JBKI</h5>
                                    <p>: {{ $dataUji->jbi }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Daya angkut <br> (orang / kg)</h5>
                                    <p>: {{ $dataUji->daya_angkut }}</p>
                                </div>
                            </div>
                            <div style="padding:1rem; display: grid; grid-template-columns:1fr; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <div style="display: grid; grid-template-columns:1fr 1fr;">
                                    <h5>Kelas jalan <br> terendah yang <br> boleh dilalui</h5>
                                    <p>: {{ $dataUji->kelas_rendah }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- content-5 --}}
                    <div style="margin-bottom: 1rem;">
                        <h5 style="margin-bottom: 1rem; font-weight:500;">KETERANGAN HASIL UJI</h5>
                        <div style="display:grid; grid-template-rows:1fr 1fr; align-items:flex-start; background-color:white; height:fit-content;">
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Rem Utama</h5>
                                <p>: {{ $dataUji->rem_utama }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Rem Utama <br> Sumbu I</h5>
                                <p>: {{ $dataUji->rem_utama_satu }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Rem Utama <br> Sumbu II</h5>
                                <p>: {{ $dataUji->rem_utama_dua }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Rem Utama <br> Sumbu III</h5>
                                <p>: {{ $dataUji->rem_utama_tiga }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Rem Utama <br> Sumbu IV</h5>
                                <p>: {{ $dataUji->rem_utama_empat }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Lampu Utama <br> Kanan</h5>
                                <p>: {{ $dataUji->lampu_utama_kanan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Lampu Utama <br> Kiri</h5>
                                <p>: {{ $dataUji->lampu_utama_kiri }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Lampu Utama <br> Penyimpangan <br> Kanan</h5>
                                <p>: {{ $dataUji->lampu_simpang_utama_kanan }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Lampu Utama <br> Penyimpangan <br> Kiri</h5>
                                <p>: {{ $dataUji->lampu_simpang_utama_kiri }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Emisi CO</h5>
                                <p>: {{ $dataUji->emisi_co }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Emisi HC</h5>
                                <p>: {{ $dataUji->emisi_hc }}</p>
                            </div>
                            <div style="padding:1rem; display: flex; align-items:flex-start; justify-content:space-between; gap:4rem; border-bottom:1.5px solid #f8f8f8;">
                                <h5>Ketebalan Asap</h5>
                                <p>: {{ $dataUji->ketebalan_asap }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>