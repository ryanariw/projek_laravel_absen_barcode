<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\Laporan;

class DepanController extends Controller
{
    public function masuk()
    {
        return view('masuk');
    }

    public function keluar()
    {
        return view('keluar');
    }

    public function storemasuk(Request $request)
    {
       
        $tgl = date('Y-m-d');
        $waktu = date('H:i:s');
        $h = date('D', strtotime($tgl));
        $hari_list = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu',
        );
        $hari = $hari_list[$h];
        $s = Karyawan::where('no_karyawan', $request->code)->first();
      
        if ($s == null) {
            return redirect('/')->with('pesan', 'Karyawan tidak ditemukan.');
        }

        $l = Laporan::where('karyawan_id', $s->id)->where('tanggal', $tgl)->first();

        if ($l == null) {
            $laporan = new Laporan;
            $laporan->karyawan_id = $s->id;
            $laporan->tanggal = $tgl;
            $laporan->hari = $hari;
            $laporan->waktu_masuk = $waktu;
            $laporan->waktu_pulang = "00:00:00";
            $laporan->keterangan = "Hadir";
            $laporan->save();

            return redirect('/')->with('pesan', 'Selamat Datang ' . $s->nama_karyawan);
        } else {
            return redirect('/')->with('pesan', 'Hai ' . $s->nama_karyawan . ', Anda Sudah Absen');
        }
    }

    public function storekeluar(Request $request)
    {
        $tgl = date('Y-m-d');
        $waktu = date('H:i:s');
        $s = Karyawan::where('no_karyawan', $request->code)->first();

        if ($s == null) {
            return redirect('/')->with('pesan', 'Karyawan tidak ditemukan.');
        }

        $l = Laporan::where('karyawan_id', $s->id)->where('tanggal', $tgl)->first();

        if ($l == null) {
            return redirect('/')->with('pesan', $s->nama_karyawan . ' Anda belum Absen');
        } else {
            $laporan = Laporan::find($l->id);
            $laporan->waktu_pulang = $waktu;
            $laporan->save();

            return redirect('/')->with('pesan', 'Hati-Hati Dijalan ' . $s->nama_karyawan . ' ♥');
        }
    }
}
