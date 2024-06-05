@extends('Layouts.app') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pengiriman</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Data Pengiriman</li>
        <li class="breadcrumb-item active">Tambah Data Pengiriman</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPengiriman') }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_produksi" class="form-label">Nama Sepatu</label>
            <select id="id_produksi" class="form-control" name="id_produksi" required>
              <option value="">-- Select --</option>
                @foreach ($data_produksi as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_sepatu }}</option>
                @endforeach
            </select> 
        </div>
        <div class="col-12">
            <label for="penerima" class="form-label">Penerima</label>
            <input type="text" class="form-control" id="penerima" name="penerima" placeholder="Masukkan Nama Sepatu" required>
          </div>
          <div class="col-12">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Masukkan Jumlah Pengiriman" required>
          </div>
          <div class="col-12">
            <label for="alamat_tujuan" class="form-label">Alamat Tujuan</label>
            <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" placeholder="Masukkan Tanggal Pengiriman" required>
          </div>
          <div class="col-12">
            <label for="status_pengiriman" class="form-label">Status Pengiriman</label>
              <select class="form-select" id="status_pengiriman" name="status_pengiriman" required>
                <option value="Diproses">Diproses</option>
                <option value="Dikirim">Dikirim</option>
                <option value="Diterima">Diterima</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection