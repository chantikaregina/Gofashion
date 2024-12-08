@extends('backend.layout.app')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="background-color: #00C0F0;">
                <div class="card-body p-3">
                    <h5 class="card-title d-flex align-items-center">
                        <h1 style="color: white;">Product</h1>
                        <small style="color: white; font-size: 15px;">Jumlah Produk : {{ $jumlah_produk }}</small>
                    </h5>
                </div>
                <div class="card-footer p-1 d-flex justify-content-center" style="background-color: #00ABD6;">
                    <a href="{{ route('product') }}">
                        <small style="color: white; font-size: 15px;" class="d-flex align-items-center">Lihat Detail Produk
                            <i class="ti ti-chevron-right"></i></small>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card" style="background-color: #F56B56;">
                <div class="card-body p-3">
                    <h5 class="card-title d-flex align-items-center">
                        <h1 style="color: white;">Pengguna</h1>
                        <small style="color: white; font-size: 15px;">Jumlah Pengguna : {{ $jumlah_pengguna }}</small>
                    </h5>
                </div>
                <div class="card-footer p-1 d-flex justify-content-center" style="background-color:  #DD5F4C;">
                    <a href="">
                        <small style="color: white; font-size: 15px;" class="d-flex align-items-center">Lihat Detail
                            Pengguna <i class="ti ti-chevron-right"></i></small>
                    </a>
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
                                    <td class="text-center">{{ Auth::user()->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
