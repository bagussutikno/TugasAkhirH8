@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produk</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Produk</h3>
              </div>
              <div class="card-header">
                <div class="row">
                  <div class="col-md-auto">
                    <button type="button" onclick="window.location='{{route('produk.create')}}'" class="btn btn-primary">Tambah</button>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>Produk</th>
                      <th>Kategori</th>
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Berat</th>
                      <th>Created at</th>
                      <th>Status</th>
                      {{-- <th>Aksi</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($produk_all as $produk)
                      <tr>
                        <td><img src={{$produk->foto_url}} width=100 height=100></td>
                        <td>{{$produk->nama_produk}}</td>
                        <td>{{$produk->nama_kategori}}</td>
                        <td>{{$produk->deskripsi}}</td>
                        <td>{{$produk->harga}}</td>
                        <td>{{$produk->berat}}</td>
                        <td>{{$produk->created_at->format('Y.m.d')}}</td>
                        <td>{{$produk->status}}</td>
                        <td>
                          {{-- <div class="row">
                            <div class="col-md-auto">
                                <button type="button" class="btn btn-danger">Edit</button>
                            </div>
                            <div class="col-md-auto">
                                <button type="button" class="btn btn-warning">Delete</button>
                            </div>
                          </div> --}}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection