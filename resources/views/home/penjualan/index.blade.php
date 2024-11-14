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
                            <h3>Halaman Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                        </div>
                            <div class="card-body">
                                <div
                                    class="table-responsive"
                                >
                                    <table
                                        class="table table-bordered table-striped"
                                    >
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama pelanggan</th>
                                                <th scope="col">Nama user</th>
                                                <th scope="col">Tanggal penjualan</th>
                                                <th scope="col">Total harga</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($penjualan as $penjualan)
                                            <tr>
                                                <td>{{ $penjualan->pelanggan->nama_pelanggan}}</td>
                                                <td>{{ $penjualan->user->name }}</td>
                                                <td>{{ $penjualan->tanggal_penjualan }}</td>
                                                <td>Rp.{{ number_format($penjualan->total_harga) }}</td>
                                                <td><a class="btn btn-primary" href="/detailpenjualan">Detail</a>
                                                    <a class="btn btn-primary"href="">Cetak Struk</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
