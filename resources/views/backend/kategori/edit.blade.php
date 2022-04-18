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
          <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kategori Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('kategori.update', $kategori->id)}}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="" value="{{$kategori->nama_kategori}}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kategori">Kategori</label>
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection