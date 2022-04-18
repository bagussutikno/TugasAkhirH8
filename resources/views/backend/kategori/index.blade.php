@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-auto">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kategori Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('kategori.store')}}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <select name="jenis_kategori" class="form-control">
                        <option value="Elektronik">Elektronik</option>
                        <option value="Smartphone">Smartphone</option>
                        <option value="Produk Virtual">Produk Virtual</option>
                    </select>
                  </div>
                <!-- /.card-body -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
        </div>
        
        <div class="row">
          <div class="col-md-auto">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kategori</th>
                      <th>Parent</th>
                      <th>Created at</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kategori_all as $kategori)
                      <tr>
                        <td>{{$kategori->id}}</td>
                        <td>{{$kategori->nama_kategori}}</td>
                        <td>{{$kategori->jenis_kategori}}</td>
                        <td>{{$kategori->created_at->format('Y.m.d')}}</td>
                        <td>
                          <div class="row">
                            <div class="col-md-auto">
                              <button type="button" onclick="window.location='{{route('kategori.edit',$kategori->id)}}'" class="btn btn-danger">Edit</button>
                            </div>
                            <div class="col-md-auto">
                              <button type="button" onclick="window.location='{{route('kategori.delete',$kategori->id)}}'" class="btn btn-warning">Delete</button>
                            </div>
                          </div>
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