<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengujians', function (Blueprint $table) {
            $table->id();
            // identitas pemilik
            $table->string('nama_pemilik');
            $table->string('alamat_pemilik');
            // identitas kendaraan
            $table->string('no_uji_kendaraan');
            $table->string('no_sertifikat_registrasi');
            $table->string('no_registrasi_kendaraan');
            $table->string('no_rangka_kendaraan');
            $table->string('no_motor_penggerak');
            // foto kendaraan
            $table->string('foto_depan');
            $table->string('foto_belakang');
            $table->string('foto_kanan');
            $table->string('foto_kiri');
            // spek kendaraan
            $table->string('jenis_kendaraan');
            $table->string('merk_kendaraan');
            $table->date('tahun_pembuatan');
            $table->string('isi_silinder');
            $table->string('bahan_bakar');
            $table->string('daya_motor');
            $table->string('ukuran_ban');
            $table->string('konfigurasi_sumbu');
            $table->string('berat_kosong');
            // dimensi utama
            $table->string('panjang_kendaraan');
            $table->string('lebar_kendaraan');
            $table->string('tinggi_kendaraan');
            $table->string('julur_depan');
            $table->string('julur_belakang');
            // jarak sumbu
            $table->string('sumbu_satu_dua');
            $table->string('sumbu_dua_tiga');
            $table->string('sumbu_tiga_empat');
            // dimensi muatan
            $table->string('pjg_lbr_tinggi');
            $table->string('jbb');
            $table->string('jbi');
            $table->string('daya_angkut');
            $table->string('kelas_rendah');
            // hasil uji
            $table->string('rem_utama');
            $table->string('rem_utama_satu');
            $table->string('rem_utama_dua');
            $table->string('rem_utama_tiga');
            $table->string('rem_utama_empat');
            $table->string('lampu_utama_kanan');
            $table->string('lampu_utama_kiri');
            $table->string('lampu_simpang_utama_kanan');
            $table->string('lampu_simpang_utama_kiri');
            $table->string('emisi_co');
            $table->string('emisi_hc');
            $table->string('ketebalan_asap');
            // lainnya
            $table->string('keterangan_uji_berkala');
            $table->date('masa_berlaku');
            $table->string('nama_penguji');
            $table->string('nrp_penguji');
            $table->string('nama_kepala_dinas');
            $table->string('pangkat_kepala_dinas');
            $table->string('nip_kepala_dinas');
            $table->string('uptd_penguji');
            $table->string('nama_direktur');
            $table->string('pangkat_direktur');
            $table->string('nip_direktur');
            $table->string('wilayah_uji');
            $table->string('wilayah_asal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pengujians');
    }
};
