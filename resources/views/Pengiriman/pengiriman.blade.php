@extends('Layouts.app') @section('content')
{{-- Alert Success Add --}}
    @if (session()->has('primary'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('primary') }}
        </div>
    @endif
{{-- Alert Success Update --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
{{-- Alert Success Delete --}}
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
        </div>
    @endif
<div class="pagetitle">
    <h1>Data Pengiriman</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Pengiriman</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addPengiriman') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfPengiriman') }}" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i> Cetak PDF</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sepatu</th>
                                <th>Penerima</th>
                                {{-- <th>Jumlah Barang</th> --}}
                                <th>Alamat Tujuan</th>
                                <th>Status Pengiriman</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->produksi->nama_sepatu}}</td>
                                    <td>{{ $row->penerima}}</td>
                                    {{-- <td>{{ $row->jumlah_barang }}</td> --}}
                                    <td>{{ $row->alamat_tujuan}}</td>
                                    <td>{{ $row->status_pengiriman }}</td>
                                    <td>
                                        <a href="{{ route('viewPengiriman', $row->id) }}" class="btn icon btn-primary" data-bs-target="{{ $row->id }}"><i class="fas fa-eye"></i>  </a>
                                        <a href="{{ route('readPengiriman', $row->id) }}" class="btn icon btn-success"><i class="fas fa-edit"></i>  </a>
                                        <a href="{{ route('deletePengiriman', $row->id) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i>  </a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="8"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
