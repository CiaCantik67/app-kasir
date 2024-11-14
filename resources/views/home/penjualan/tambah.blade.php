@extends('layouts.master')
@section('title','penjualan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Penjualan</h3>
                            <a class="btn btn-warning" href="/penjualan">Kembali</a>
                        </div>
                            <div class="card-body">
                                <form action="/penjualan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Pelanggan</label>
                                        <select
                                            class="form-select form-select-lg form-control"
                                            name="id_pelanggan"
                                            id=""
                                        >
                                            <option selected>pilih pelanggan</option>
                                            @foreach($pelanggan as $pelanggan)
                                            <option value="{{$pelanggan-> id}}">{{$pelanggan->nama_pelanggan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama User</label>
                                        <select
                                            class="form-select form-select-lg form-control"
                                            name="id_user"
                                            id=""
                                        >
                                            <option selected>pilih user</option>
                                            @foreach($user as $user)
                                            <option value="{{$user-> id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Tanggal penjualan</label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            name="tanggal_penjualan"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Total Harga</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="total_harga"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>

                                    </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>

                                </form>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

