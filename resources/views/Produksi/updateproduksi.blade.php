@extends('Layouts.app') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Produksi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"> Data Produksi</li>
        <li class="breadcrumb-item active">Ubah Data Produksi</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateProduksi', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id_bahan_baku" class="form-label">ID Bahan Baku</label>
              <select id="id_bahan_baku" class="form-control" name="id_bahan_baku" required>
                <option value="">-- Select --</option>
                @foreach ($data_bahanbaku as $row) 
                  <option value="{{ $row->id }}" {{ $row->id == $data->id_bahan_baku ? 'selected' : '' }}>{{ $row->jenis }}
                @endforeach
              </select> 
          </div>
          <div class="col-12">
            <label for="nama_sepatu" class="form-label">Nama Sepatu</label>
            <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu" value="{{ $data->nama_sepatu }}" required>
          </div>
          <div class="col-12">
            <label for="jumlah_produksi" class="form-label">Jumlah Produksi</label>
            <input type="number" class="form-control" id="jumlah_produksi" name="jumlah_produksi" value="{{ $data->jumlah_produksi }}" required>
          </div>
          <div class="col-12">
            <label for="tanggal_produksi" class="form-label">Tanggal Produksi</label>
            <input type="date" class="form-control" id="tanggal_produksi" name="tanggal_produksi" value="{{ $data->tanggal_produksi }}" required>
          </div>
          <div class="col-12">
            <label for="durasi_produksi" class="form-label">Durasi Produksi</label>
            <input type="text" class="form-control" id="durasi_produksi" name="durasi_produksi" value="{{ $data->durasi_produksi }}" required>
          </div>
          <div class="col-12">
            <label for="pembuatan_ke" class="form-label">Pembuatan Ke</label>
            <input type="number" class="form-control" id="pembuatan_ke" name="pembuatan_ke" value="{{ $data->pembuatan_ke }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection