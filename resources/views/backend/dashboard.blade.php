@extends('backend.layout.app')

@section('title', 'Dashboard')

@section('content')

<div class="row">
  <div class="col-lg-6">
    <div class="card" style="background-color: #00C0F0;">
      <div class="card-body p-3">
        <h5 class="card-title d-flex align-items-center">
          <h1 style="color: white;">2</h1>
          <small style="color: white; font-size: 15px;">Jumlah Produk</small>
        </h5>
      </div>
      <div class="card-footer p-1 d-flex justify-content-center" style="background-color: #00ABD6;">
        <a href="{{ route('product') }}">
          <small style="color: white; font-size: 15px;" class="d-flex align-items-center">Lihat Detail Produk <i class="ti ti-chevron-right"></i></small>
        </a>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card" style="background-color: #F56B56;">
      <div class="card-body p-3">
        <h5 class="card-title d-flex align-items-center">
          <h1 style="color: white;">2</h1>
          <small style="color: white; font-size: 15px;">Pengguna</small>
        </h5>
      </div>
      <div class="card-footer p-1 d-flex justify-content-center" style="background-color:  #DD5F4C;">
        <a href="">
          <small style="color: white; font-size: 15px;" class="d-flex align-items-center">Lihat Detail Pengguna <i class="ti ti-chevron-right"></i></small>
        </a>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Produk</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
              <tr class="border-2 border-bottom border-primary border-0">
                <th scope="col" class="ps-0">No</th>
                <th scope="col">Kode</th>
                <th scope="col" class="text-center">Produk</th>
                <th scope="col" class="text-center">Harga</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">1</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">10</a>
                </td>
                <td class="text-center fw-medium">Rok Span</td>
                <td class="text-center fw-medium">Rp. 85.000</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">2</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">6</a>
                </td>
                <td class="text-center fw-medium">Baju Koko</td>
                <td class="text-center fw-medium">Rp. 150.000</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">3</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">4</a>
                </td>
                <td class="text-center fw-medium">Dress</td>
                <td class="text-center fw-medium">Rp. 170.000</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium">
                  <span class="table-link1 text-truncate d-block">4</span>
                </th>
                <td>
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">7</a>
                </td>
                <td class="text-center fw-medium">Switter Rajut</td>
                <td class="text-center fw-medium">Rp. 125.000</td>
              </tr>
              <tr>
                <th scope="row" class="ps-0 fw-medium border-0">
                  <span class="table-link1 text-truncate d-block">5</span>
                </th>
                <td class="border-0">
                  <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">8</a>
                </td>
                <td class="text-center fw-medium border-0">Tas Bostanten</td>
                <td class="text-center fw-medium border-0">Rp. 160.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Pengguna</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
              <tr class="border-2 border-bottom border-primary border-0">
                <th scope="col" class="ps-0">No</th>
                <th scope="col">UserName</th>
                <th scope="col" class="text-center">FullName</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>{{ Auth::user()->username }}</td>
                <td>{{ Auth::user()->fullname }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  @endsection
