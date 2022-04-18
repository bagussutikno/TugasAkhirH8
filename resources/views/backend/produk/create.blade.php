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
        <div class="row">
            <div class="col-md-auto">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Tambah Produk
                  </h3>
                </div>
                <!-- /.card-header -->
                <form method="post" action="{{route('produk.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="row">
                      <h2 class="card-title">Nama Produk</h2>
                      <input type="text" name="nama_produk" class="form-control" id="" placeholder="">
                    </div>
                    <div class="row">
                      <h2 class="card-title">Deskripsi</h2>
                    </div>
                    <div class="row">
                      <textarea name="deskripsi" id="summernote"></textarea>
                    </div>
                    <div class="row">
                      <h2 class="card-title">Status</h2>
                      <select name="status" class="form-control">
                        <option value="rilis">Rilis</option>
                        <option value="draft">Draft</option>
                      </select>
                    </div>
                    <div class="row">
                      <h2 class="card-title">Kategori</h2>
                      <select name="kategori_id" class="form-control">
                        @foreach ($kategori as $key=> $item)
                        <option value={{$item->id}}>{{$item->nama_kategori}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="row">
                      <h2 class="card-title">Harga</h2>
                      <input type="number" name="harga" class="form-control" id="" placeholder="">
                    </div>
                    <div class="row">
                      <h2 class="card-title">Berat</h2>
                      <input type="number" name="berat" class="form-control" id="" placeholder="">
                    </div>
                    <div class="row">
                      <h2 class="card-title">Foto Produk</h2>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="chooseFile" >
                        <label class="custom-file-label" for="chooseFile">Choose file</label>
                      </div>
                    </div>
                    <div class="row">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection