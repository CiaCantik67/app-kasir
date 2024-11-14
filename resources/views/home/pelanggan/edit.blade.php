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
                            <h3>Halaman Edit Data Pelanggan</h3>
                            <a class="btn btn-warning" href="/pelanggan">Kembali</a>
                        </div>
                            <div class="card-body">
                                <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Pelanggan</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama_pelanggan"
                                            id=""
                                            value="{{$pelanggan->nama_pelanggan}}"
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Update</button>

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

