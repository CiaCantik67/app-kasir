@extends('layouts.master')
@section('title','user')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>
                        </div>
                            <div class="card-body">
                                <form action="/user/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                    </div>
                                   <div class="mb-3">
                                    <label for="" class="form-label">Role</label>
                                    <select
                                        class="form-select form-select-lg form-control"
                                        name="role"
                                        id=""
                                    >
                                        <option selected>pilih salah satu</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Kasir">Kasir</option>

                                    </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
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

