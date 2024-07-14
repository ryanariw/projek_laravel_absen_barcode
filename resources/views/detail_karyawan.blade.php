@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data karyawan</h1>
                    </div>

                    <!--tambah data karyawan-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Data karyawan</h6>
                        </div>         
                        <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode karyawan</label>
                                    <div class="col-sm-2">
                                        <input name="no_karyawan" readonly type="text" class="form-control" value="{{ $karyawan->no_karyawan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama karyawan</label>
                                    <div class="col-sm-4">
                                        <input name="nama_karyawan" readonly type="text" class="form-control" value="{{ $karyawan->nama_karyawan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">kode karyawan</label>
                                    <div class="col-sm-2">
                                        <input name="kode_karyawan" readonly type="text" class="form-control" value="{{ $karyawan->kode_karyawan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-2">
                                        <input name="jenis_kelamin" readonly type="text" class="form-control" value="{{ $karyawan->jenis_kelamin }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-2">
                                        <input name="jabatan" readonly type="text" class="form-control" value="{{ $karyawan->jabatan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <input name="alamat" readonly type="text" class="form-control" id="inputAlamat" value="{{ $karyawan->alamat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> No Telepon</label>
                                    <div class="col-sm-2">
                                        <input name="no_telepon" readonly type="text" class="form-control" value="{{ $karyawan->telepon }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tempat_lahir" readonly type="text" class="form-control" value="{{ $karyawan->tempat_lahir }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tanggal_lahir" readonly type="date" class="form-control" value="{{ $karyawan->tanggal_lahir }}">
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input name="email" readonly type="email" class="form-control" id="staticEmail" value="{{ $karyawan->email }}">
                                    </div>
                                </div>
                            
                            <div class="my-2">
                                <a href="/data_karyawan" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                            </div>
                        </div>           
                    </div>
                

@endsection

@section ('title')

{{'Detail karyawan'}}

@endsection