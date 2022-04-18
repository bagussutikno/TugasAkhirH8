@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pesanan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-auto">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Pesanan</h3>
              <div class="card-tools">
                  <div class="input-group-append">
                    <div class="col-sm-auto">
                      <button type="button" onclick="window.location='{{route('pesanan.create')}}'" class="btn btn-primary">Tambah</button>
                    </div>
                    <div class="col-sm-auto">
                      <button type="button" class="btn btn-success">Export PDF</button>
                    </div>
                  </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>InvoiceID</th>
                    <th>Pelanggan</th>
                    <th>Produk</th>
                    <th>Kuantitas</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pesanan_all as $pesanan)
                  <tr>
                    <td>{{$pesanan->invoice_id}}</td>
                    <td>{{$pesanan->pelanggan_id}}</td>
                    <td>{{$pesanan->produk_id}}</td>
                    <td>{{$pesanan->qty}}</td>
                    <td>{{$pesanan->total_harga}}</td>
                    <td>{{$pesanan->status}}</td>
                    <td>{{$pesanan->date}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection