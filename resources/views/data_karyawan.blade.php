@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data pegawai</h1>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                    </div>
                    @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <a href="/tambah_karyawan" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text"> Tambah Data</span>
                                </a>
                                <a href="/cetak_kartu" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-print"></i>
                                    </span>
                                    <span class="text">Cetak Kartu</span>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode karyawan</th>
                                            <th>Nama karyawan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($karyawans as $karyawan)
                                        <tr>
                                            <td>{{ $karyawan->id }}</td>
                                            <td>{{ $karyawan->kode_karyawan }}</td>
                                            <td>{{ $karyawan->nama_karyawan }}</td>
                                            <td>{{ $karyawan->jenis_kelamin }}</td>
                                            <td>{{ $karyawan->alamat }}</td>
                                            <td>
                                                <!-- ubah data pegawai -->
                                                <a href="/ubah_karyawan/{{ $karyawan->id }}" class="btn-sm btn-warning btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                    <span class="text">Ubah</span>
                                                </a>
                                                <!-- hapus data karyawan -->
                                                <a href="hapus_karyawan/{{ $karyawan->id }}" class="btn-sm btn-danger btn-icon-split" onclick="return confirm('Anda yakin ingin menghapus data')">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Hapus</span>
                                                </a>
                                                <a href="/detail_karyawan/{{ $karyawan->id }}" class="btn-sm btn-info btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Detail</span>
                                                </a>
                                            </td>
                                        </tr>   
                                    @empty
                                    data kosong
                                    @endforelse 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection

@section ('title')

{{'Data Siswa'}}

@endsection