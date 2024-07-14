@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
                    </div>

                    <!--tambah data karyawan-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data karyawan</h6>
                        </div>         
                        <div class="card-body">
                            <form method="POST" action="{{ url('/tambah_karyawan') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No karyawan</label>
                                    <div class="col-sm-2">
                                        <input name="no_karyawan" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama karyawan</label>
                                    <div class="col-sm-4">
                                        <input name="nama_karyawan" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Karyawan</label>
                                    <div class="col-sm-2">
                                        <input name="kode_karyawan" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-2">
                                        <select name="jenis_kelamin" class="form-control" id="inputJenisKelamin" required>
                                            <option style="text-align: center;">-Jenis Kelamin-</option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">jabatan</label>
                                    <div class="col-sm-7">
                                        <input name="jabatan" type="text" class="form-control"  required>
                                    </div>
                                </div>    

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <input name="alamat" type="text" class="form-control" id="inputAlamat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> No Telepon</label>
                                    <div class="col-sm-2">
                                        <input name="no_telepon" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-7">
                                        <input name="tempat_lahir" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tanggal_lahir" type="date" class="form-control" required>
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input name="email" type="email" class="form-control" id="staticEmail" required>
                                    </div>
                                </div>
                            <div class="my-2">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-save"></i>
                                    </span>
                                    <span class="text">Simpan</span>
                                </button>
                            </div>
                        </div>           
                    </div>
                </form>
@endsection

@section ('title')

{{'Tambah karyawan'}}

@endsection