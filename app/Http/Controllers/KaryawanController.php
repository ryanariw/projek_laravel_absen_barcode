<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        // Menampilkan seluruh karyawan
        $karyawans = Karyawan::ALL();
        return view('data_karyawan' ,compact('karyawans'));
    }

    public function create()
    {
        // Menampilkan formulir tambah data
        return view('tambah_karyawan');
    }

    public function store(Request $request)
    {
        // Menyimpan data form ke database
        $karyawan = new karyawan;
        $karyawan->no_karyawan = $request->no_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->kode_karyawan = $request->kode_karyawan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->alamat = $request->alamat;
        $karyawan->telepon = $request->no_telepon;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->email = $request->email;
        $karyawan->save();
        $karyawans = karyawan::All();
        return redirect('/data_karyawan')->with('pesan' ,"Tambah data karyawan telah berhasil")->with(compact('karyawans'));
    }

    public function show(Karyawan $karyawan)
    {
        //
        return view('detail_karyawan' ,compact('karyawan'));
        
    }

    // hapus data karyawan
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        $karyawans = karyawan::All();
        return redirect('/data_karyawan')->with('pesan' ,"Hapus data karyawan telah berhasil")->with(compact('karyawans'));
    }

    // edit data
    public function edit($id)
    {
        // Menampilkan data karywan ke dalam 
        $karyawan = Karyawan::find($id);
        return view('ubah_karyawan' ,compact('karyawan'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Karyawan $karyawan)
    {
    
        $karyawan =  karyawan::find($request->id);
        $karyawan->no_karyawan = $request->no_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->kode_karyawan = $request->kode_karyawan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->alamat = $request->alamat;
        $karyawan->telepon = $request->no_telepon;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->email = $request->email;
        $karyawan->save();
        $karyawans = karyawan::All();
        return redirect('/data_karyawan')->with('pesan' ,"Ubah data karyawan telah berhasil")->with(compact('karyawans'));
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function detail(Karyawan $karyawan)
    {
        //
        return view('detail_karyawan' ,compact('karyawan'));
    }
    
    public function showtwo()
    {
        // Menampilkan seluruh siswa
        $karyawans = Karyawan::ALL();
        return view('cetak_kartu' ,compact('karyawans'));
    }
}
