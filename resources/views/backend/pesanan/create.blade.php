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
              <!-- left column -->
              <div class="col-md-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Pesanan Baru</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" action="{{route('pesanan.store')}}" enctype="multipart/form-data">
                      @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">InvoiceID</label>
                            <input type="text" name="invoice_id" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pelanggan</label>
                            @foreach ($kategori as $key=> $item)
                                <option value={{$item->id}}>{{$item->name}}</option>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Produk</label>
                            <input type="number" name="produk_id" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kuantitas</label>
                            <input type="number" name="qty" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total</label>
                            <input type="number" name="total_harga" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select name="status" class="form-control">
                                <option value="Selesai">Selesai</option>
                                <option value="Proses">Proses</option>
                                <option value="Batal">Batal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input type="date" name="date" class="form-control" id="" placeholder="">
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