@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan</h1>
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
                <h3 class="card-title">Data Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('pelanggan.store')}}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Pelanggan</label>
                    <input type="text" name="alamat" class="form-control" id="" placeholder="">
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
                <h3 class="card-title">List Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Pelanggan</th>
                      <th>Alamat Pelanggan</th>
                      <th>Created at</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pelanggan_all as $pelanggan)
                      <tr>
                        <td>{{$pelanggan->id}}</td>
                        <td>{{$pelanggan->name}}</td>
                        <td>{{$pelanggan->alamat}}</td>
                        <td>{{$pelanggan->created_at->format('Y.m.d')}}</td>
                        <td>
                          <div class="row">
                            <div class="col-md-auto">
                              <button type="button" onclick="window.location='{{ route('pelanggan.edit',$pelanggan->id)}}'" class="btn btn-danger">Edit</button>
                            </div>
                            <div class="col-md-auto">
                              <button type="button" onclick="window.location='{{ route('pelanggan.delete',$pelanggan->id)}}'" class="btn btn-warning">Delete</button>
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