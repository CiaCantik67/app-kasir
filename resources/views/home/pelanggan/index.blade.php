@extends('layouts.master')
@section('title','pelanggan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Tambah</a>
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
                                                <th scope="col">No</th>
                                                <th scope="col">Nama_Pelanggan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pelanggan as $pelanggan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pelanggan->nama_pelanggan }}</td>
                                                <td><a class="btn btn-warning" href="/pelanggan/{{$pelanggan->id}}/show">Edit</a>
                                                    <a class="btn btn-danger" href="/pelanggan/{{$pelanggan->id}}/delete"
                                                    onclick="return confirm('yakin mau di hapus?')">Delete</a></td>
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
