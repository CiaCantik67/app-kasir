@extends('layouts.master')
@section('title','keranjang')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Detail Penjualan</h3>
                            <a class="btn btn-warning" href="/penjualan">Kembali</a>
                        </div>
                            <div class="card-body">
                                <form action="/detailpenjualan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Produk</label>
                                        <select
                                            class="form-select form-select-lg form-control"
                                            name="id_produk"
                                            id=""
                                        >
                                            <option selected>pilih produk</option>
                                            @foreach($produk as $produk)
                                            <option value="{{$produk-> id}}">{{$produk->nama_produk}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jumlah</label>
                                        <select
                                            class="form-select form-select-lg form-control"
                                            name="jumlah"
                                            id=""
                                        >
                                            <option selected>pilih jumlah</option>
                                            @foreach($jumlah as $jumlah)
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

