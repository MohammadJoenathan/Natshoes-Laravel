@extends('Layouts.app') @section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

  
              </div><!-- End Customers Card -->

            <!-- Bahan Baku Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
  
                  <div class="card-body" style="align-self: center;">
                    <h5 class="card-title">Bahan Baku <span> | For Now </span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-cubes"></i>
                      </div>
                      <div class="ps-3">
                        <h6 style="text-align: center">{{ $data_bahanbaku }}</h6>
                        <a href="{{ route('BahanBaku') }}" class="small-box-footer" style="text-align: center">More info</a>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Bahan Baku Card -->

            <!-- Produksi Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body" style="align-self: center;">
                  <h5 class="card-title">Produksi <span> | For Now </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-cube"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="text-align: center">0</h6>
                      <a href="" class="small-box-footer" style="text-align: center">More info</a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Produksi Card -->

            <!-- Pengiriman Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body" style="align-self: center">
                  <h5 class="card-title">Pengiriman<span> | For Now </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-truck"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="text-align: center">0</h6>
                      <a href="" class="small-box-footer" style="text-align: center">More info</a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengiriman Card -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

@endsection