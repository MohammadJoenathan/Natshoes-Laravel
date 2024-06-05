@extends('Layouts.app') @section('content')

<div class="pagetitle">
    <h1>View Data Pengiriman</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"> Data Pengiriman</li>
        <li class="breadcrumb-item active">View Data Pengiriman</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('viewPengiriman', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Pengiriman</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_produksi" class="form-label">ID Produksi</label>
            <input type="text" class="form-control" id="id_produksi" name="id_produksi" value="{{ $data->produksi->nama_sepatu }}" readonly>
          </div>
          <div class="col-12">
            <label for="penerima" class="form-label">Penerima</label>
            <input type="text" class="form-control" id="penerima" name="penerima" value="{{ $data->penerima }}" readonly>
          </div>
          <div class="col-12">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $data->jumlah_barang }}" readonly>
          </div>
          <div class="col-12">
            <label for="alamat_tujuan" class="form-label">Alamat Tujuan</label>
            <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" value="{{ $data->alamat_tujuan }}" readonly>
          </div>
          <div class="col-12">
            <label for="status_pengiriman" class="form-label">Kategori Tiket</label>
            <input class="form-control" id="status_pengiriman" name="status_pengiriman"  value="{{ $data->status_pengiriman }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection