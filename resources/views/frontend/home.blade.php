@extends('frontend.layout.app')

@section('title', 'Home')

@section('content')

<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h1 class="mb-5 display-3" style="color: #FBFBFB;">Fashion and Shopping</h1>
                <div class="position-relative mx-auto">
                    <form method="GET" action="{{ route('home') }}" class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="text" name="search" placeholder="Search" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($produkKategori as $index => $product)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }} rounded">
                            <img src="{{ asset('storage/' . $product->foto) }}" class="img-fluid w-100 h-100 bg-secondary rounded"
                                alt="Product Slide">
                        </div>
                        @endforeach
                    </div>

                    <!-- Tombol Previous -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <!-- Tombol Next -->
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4">
                <div class="col-lg-4 text-start">
                    <h1 class="display-4">Kategori</h1>
                </div>
                <div class="col-lg-8 text-end">
                    <ul class="nav nav-pills d-inline-flex text-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill {{ !request()->get('category') && !request()->get('search') ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#tab-0">
                                <span class="text-dark" style="width: 130px;">Semua Produk</span>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="d-flex py-2 m-2 bg-light rounded-pill {{ (request()->get('category') == $category->id_category || $selectedCategoryId == $category->id_category) ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#tab-{{ $category->id_category }}">
                                <span class="text-dark" style="width: 130px;">{{ $category->nama_category }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <!-- Semua Produk -->
                <div id="tab-0" class="tab-pane fade show {{ !request()->get('category') && !request()->get('search') ? 'active' : '' }}">
                    <div class="row g-4">
                        @foreach ($oneProductPerCategory as $categoryId => $productsInCategory)
                        @foreach ($productsInCategory as $product) <!-- Mengakses produk pertama dalam kategori -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('storage/'.$product->foto) }}" class="img-fluid w-100 rounded-top" alt="" style="height: 400px; object-fit: cover;">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                                    {{ $product->category->nama_category }}
                                </div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <a href="{{ route('detail', $product->id_product) }}" class="h5">{{ $product->nama_product }}</a>
                                    <p style="margin-bottom: .4rem">{{ $product->deskripsi }}</p>
                                    <div class="d-flex flex-column justify-content-center flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($product->harga_product, 0, ',', '.') }}</p>
                                        <!-- Form untuk menambah produk ke keranjang -->
                                        <form action="{{ route('add.to.cart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                                            <input type="hidden" name="quantity" value="1"> <!-- Default quantity 1, bisa ditambah jika ada input quantity -->
                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>

                <!-- Produk Berdasarkan Kategori -->
                @foreach ($categories as $category)
                <div id="tab-{{ $category->id_category }}" class="tab-pane fade {{ (request()->get('category') == $category->id_category || $selectedCategoryId == $category->id_category) ? 'show active' : '' }}">
                    <div class="row g-4">
                        @foreach ($productsByCategory->get($category->id_category, []) as $product)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('storage/'.$product->foto) }}" class="img-fluid w-100 rounded-top" alt="" style="height: 400px; object-fit: cover;">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                                    {{ $product->category->nama_category }}
                                </div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <a href="{{ route('detail', $product->id_product) }}" class="h5">{{ $product->nama_product }}</a>
                                    <p>{{ $product->deskripsi }}</p>
                                    <div class="d-flex flex-column justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($product->harga_product, 0, ',', '.') }}</p>
                                        <!-- Form untuk menambah produk ke keranjang -->
                                        <form action="{{ route('add.to.cart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                                            <input type="hidden" name="quantity" value="1"> <!-- Default quantity 1, bisa ditambah jika ada input quantity -->
                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->

<!-- Bestsaler Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-4">Bestseller Produk</h1>
            <p>di toko kami mempunyai beberapa barang terlaris contohnya seperti di bawah ini</p>
        </div>
        <div class="row g-4">
            @foreach($BestsellerProduct as $index => $product)
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="{{ asset('storage/'.$product->foto) }}" class="img-fluid rounded-circle w-100" alt="" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="col-6">
                            <a href="{{ route('detail', $product->id_product) }}" class="h5">{{ $product->nama_product }}</a>
                            <div class="d-flex my-3">
                                @php
                                    // Tentukan jumlah bintang berdasarkan rating rata-rata
                                    $fullStars = floor($product->average_rating);  // Bintang penuh
                                    $halfStar = ($product->average_rating - $fullStars) >= 0.5 ? 1 : 0; // Bintang setengah
                                    $emptyStars = 5 - $fullStars - $halfStar;  // Bintang kosong
                                @endphp

                                <!-- Tampilkan bintang penuh -->
                                @for($i = 0; $i < $fullStars; $i++)
                                    <i class="fas fa-star text-warning"></i>
                                @endfor

                                <!-- Tampilkan bintang setengah -->
                                @if($halfStar)
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                @endif

                                <!-- Tampilkan bintang kosong -->
                                @for($i = 0; $i < $emptyStars; $i++)
                                    <i class="fas fa-star text-muted"></i>
                                @endfor
                            </div>

                            <form action="{{ route('add.to.cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                                <input type="hidden" name="quantity" value="1"> <!-- Default quantity 1, bisa ditambah jika ada input quantity -->
                                <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Bestsaler Product End -->


<!-- Banner Section Start-->
<div class="container-fluid banner my-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="py-4">
                    <h1 class="display-4 style=" max-width: 700px;>Find Your Fashion</h1>
                    <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                    <a href="#"
                        class="banner-btn btn border-2 border-secondary rounded-pill py-3 px-4" style="top: 0; right: 25%;">BUY</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

@endsection
