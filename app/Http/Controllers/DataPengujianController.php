<?php

namespace App\Http\Controllers;

use App\Models\dataPengujian;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class DataPengujianController extends Controller
{
    public function index()
    {
        $dataUji = dataPengujian::latest()->get();
        return view('pages.dashboard', compact('dataUji'));
    }

    public function create()
    {
        return view('pages.action.add-data');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'alamat_pemilik' => 'required',
            'no_uji_kendaraan' => 'required',
            'no_sertifikat_registrasi' => 'required',
            'no_registrasi_kendaraan' => 'required',
            'no_rangka_kendaraan' => 'required',
            'no_motor_penggerak' => 'required',
            'foto_depan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'foto_belakang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'foto_kanan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'foto_kiri' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'jenis_kendaraan' => 'required',
            'merk_kendaraan' => 'required',
            'tahun_pembuatan' => 'required',
            'isi_silinder' => 'required',
            'bahan_bakar' => 'required',
            'daya_motor' => 'required',
            'ukuran_ban' => 'required',
            'konfigurasi_sumbu' => 'required',
            'berat_kosong' => 'required',
            'panjang_kendaraan' => 'required',
            'lebar_kendaraan' => 'required',
            'tinggi_kendaraan' => 'required',
            'julur_depan' => 'required',
            'julur_belakang' => 'required',
            'sumbu_satu_dua' => 'required',
            'sumbu_dua_tiga' => 'required',
            'sumbu_tiga_empat' => 'required',
            'pjg_lbr_tinggi' => 'required',
            'jbb' => 'required',
            'jbi' => 'required',
            'daya_angkut' => 'required',
            'kelas_rendah' => 'required',
            'rem_utama' => 'required',
            'rem_utama_satu' => 'required',
            'rem_utama_dua' => 'required',
            'rem_utama_tiga' => 'required',
            'rem_utama_empat' => 'required',
            'lampu_utama_kanan' => 'required',
            'lampu_utama_kiri' => 'required',
            'lampu_simpang_utama_kanan' => 'required',
            'lampu_simpang_utama_kiri' => 'required',
            'emisi_co' => 'required',
            'emisi_hc' => 'required',
            'ketebalan_asap' => 'required',
            'keterangan_uji_berkala' => 'required',
            'masa_berlaku' => 'required',
            'nama_penguji' => 'required',
            'nrp_penguji' => 'required',
            'nama_kepala_dinas' => 'required',
            'pangkat_kepala_dinas' => 'required',
            'nip_kepala_dinas' => 'required',
            'uptd_penguji' => 'required',
            'nama_direktur' => 'required',
            'pangkat_direktur' => 'required',
            'nip_direktur' => 'required',
            'wilayah_uji' => 'required',
            'wilayah_asal' => 'required'
        ]);
        //upload image
        $image = $request->file('foto_depan', 'foto_belakang', 'foto_kanan', 'foto_kiri');
        $image_name = time() . '.' . $image->extension();
        $image->storeAs('storage/', $image_name);

        // create post
        dataPengujian::create([
            'nama_pemilik' => $request->nama_pemilik,
            'alamat_pemilik' => $request->alamat_pemilik,
            'no_uji_kendaraan' => $request->no_uji_kendaraan,
            'no_sertifikat_registrasi' => $request->no_sertifikat_registrasi,
            'no_registrasi_kendaraan' => $request->no_registrasi_kendaraan,
            'no_rangka_kendaraan' => $request->no_rangka_kendaraan,
            'no_motor_penggerak' => $request->no_motor_penggerak,
            'foto_depan' => $image_name,
            'foto_belakang' => $image_name,
            'foto_kanan' => $image_name,
            'foto_kiri' => $image_name,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'merk_kendaraan' => $request->merk_kendaraan,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'isi_silinder' => $request->isi_silinder,
            'bahan_bakar' => $request->bahan_bakar,
            'daya_motor' => $request->daya_motor,
            'ukuran_ban' => $request->ukuran_ban,
            'konfigurasi_sumbu' => $request->konfigurasi_sumbu,
            'berat_kosong' => $request->berat_kosong,
            'panjang_kendaraan' => $request->panjang_kendaraan,
            'lebar_kendaraan' => $request->lebar_kendaraan,
            'tinggi_kendaraan' => $request->tinggi_kendaraan,
            'julur_depan' => $request->julur_depan,
            'julur_belakang' => $request->julur_belakang,
            'sumbu_satu_dua' => $request->sumbu_satu_dua,
            'sumbu_dua_tiga' => $request->sumbu_dua_tiga,
            'sumbu_tiga_empat' => $request->sumbu_tiga_empat,
            'pjg_lbr_tinggi' => $request->pjg_lbr_tinggi,
            'jbb' => $request->jbb,
            'jbi' => $request->jbi,
            'daya_angkut' => $request->daya_angkut,
            'kelas_rendah' => $request->kelas_rendah,
            'rem_utama' => $request->rem_utama,
            'rem_utama_satu' => $request->rem_utama_satu,
            'rem_utama_dua' => $request->rem_utama_dua,
            'rem_utama_tiga' => $request->rem_utama_tiga,
            'rem_utama_empat' => $request->rem_utama_empat,
            'lampu_utama_kanan' => $request->lampu_utama_kanan,
            'lampu_utama_kiri' => $request->lampu_utama_kiri,
            'lampu_simpang_utama_kanan' => $request->lampu_simpang_utama_kanan,
            'lampu_simpang_utama_kiri' => $request->lampu_simpang_utama_kiri,
            'emisi_co' => $request->emisi_co,
            'emisi_hc' => $request->emisi_hc,
            'ketebalan_asap' => $request->ketebalan_asap,
            'keterangan_uji_berkala' => $request->keterangan_uji_berkala,
            'masa_berlaku' => $request->masa_berlaku,
            'nama_penguji' => $request->nama_penguji,
            'nrp_penguji' => $request->nrp_penguji,
            'nama_kepala_dinas' => $request->nama_kepala_dinas,
            'pangkat_kepala_dinas' => $request->pangkat_kepala_dinas,
            'nip_kepala_dinas' => $request->nip_kepala_dinas,
            'uptd_penguji' => $request->uptd_penguji,
            'nama_direktur' => $request->nama_direktur,
            'pangkat_direktur' => $request->pangkat_direktur,
            'nip_direktur' => $request->nip_direktur,
            'wilayah_uji' => $request->wilayah_uji,
            'wilayah_asal' => $request->wilayah_asal
        ]);
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show($name)
    {
        $dataUji = dataPengujian::where('nama_pemilik', $name)->firstOrFail();
        return view('pages.template', compact('dataUji'));
    }

    public function downloadPDF($name)
    {
        $dataUji = dataPengujian::where('nama_pemilik', $name)->firstOrFail();
        $pdf = app('dompdf.wrapper')->loadView('pages.template', compact('dataUji'));
        return $pdf->download('data_uji_' . $name . '.pdf');
    }

    public function deleteData($id) {
        $dataUji = dataPengujian::findOrFail($id);
        $dataUji->delete();
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
