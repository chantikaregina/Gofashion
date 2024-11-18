@extends('frontend.layout.app')

@section('title', 'Product')

@section('content')


    <div class="col-lg-8 text-end">
        <ul class="nav nav-pills d-inline-flex text-center mb-5">
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                    <span class="text-dark" style="width: 130px;">Semua Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                    <span class="text-dark" style="width: 130px;">Sweater</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                    <span class="text-dark" style="width: 130px;">Jaket</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                    <span class="text-dark" style="width: 130px;">Dress</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                    <span class="text-dark" style="width: 130px;">Celana</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                    <span class="text-dark" style="width: 130px;">Rok</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                    <span class="text-dark" style="width: 130px;">Hijab</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                    <span class="text-dark" style="width: 130px;">Blazer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                    <span class="text-dark" style="width: 130px;">Hoodie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                    <span class="text-dark" style="width: 130px;">Sepatu</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('assets_main/img/sweater-1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Sweater Shall Rajut </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 200.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative jaket-png">
                                <div class="jaket-png">
                                    <img src="{{ asset('assets_main/img/jaket-1.png') }}"
                                        class="png-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Jaket</h4>
                                    <p> Jaket Kasual Panjang</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 230.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative dress-item">
                                <div class="dress-img">
                                    <img src="{{ asset('assets_main/img/dress-1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Dress</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Dress</h4>
                                    <p>Dress Midi </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 240.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative celana-item">
                                <div class="celana-img">
                                    <img src="{{ asset('assets_main/img/celana-1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Celana</h4>
                                    <p>Celana Kasual</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 200.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative rok-item">
                                <div class="rok-img">
                                    <img src="{{ asset('assets_main/img/rok-1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Rok</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Rok</h4>
                                    <p>Rok Maksi A Line</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 220.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('assets_main/img/sweater-1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Sweater Shall Rajut </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 200.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative jaket-png">
                                <div class="jaket-png">
                                    <img src="{{ asset('assets_main/img/jaket-1.png') }}"
                                        class="png-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Jaket</h4>
                                    <p> Jaket Kasual Panjang</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 230.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative dress-item">
                                <div class="dress-img">
                                    <img src="{{ asset('assets_main/img/dress-1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Dress</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Dress</h4>
                                    <p>Dress Midi </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 240.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('assets_main/img/sweater.7.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Sweater Rajut Line </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 200.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('assets_main/img/sweater.6.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Sweater Rajut </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 320.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('assets_main/img/sweater.4.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Sweater Rajut </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 250.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative sweater-item">
                                <div class="sweater-img">
                                    <img src="{{ asset('assets_main/img/sweater.5.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Sweater Wanita Rajut</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 300.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="tab-3" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative jaket-item">
                                <div class="jaket-img">
                                    <img src="{{ asset('assets_main/img/jaket.1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Jaket</h4>
                                    <p>Jaket Wanita Kasual </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 230.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative jaket-item">
                                <div class="jaket-img">
                                    <img src="{{ asset('assets_main/img/jaket.4.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Apple</h4>
                                    <p> Jaket Kasual Polos</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 260.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative jaket-item">
                                <div class="jaket-img">
                                    <img src="{{ asset('assets_main/img/jaket.3.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Apple</h4>
                                    <p> Jaket Kasual</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 230.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-4" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative dress-item">
                                <div class="dress-img">
                                    <img src="{{ asset('assets_main/img/dress.1.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Dress</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Dress</h4>
                                    <p> Dress Mini | Tunik Lengan Pendek</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 280.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative dress-item">
                                <div class="dress-img">
                                    <img src="{{ asset('assets_main/img/dress.2.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Dress</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Dress</h4>
                                    <p> Tunik | Midi Dress Kasual</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 200.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-5" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative celana-item">
                                <div class="celana-img">
                                    <img src="{{ asset('assets_main/img/celana.4.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Celana</h4>
                                    <p>Celana Panjang Kasual</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 240.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative celana-item">
                                <div class="celana-img">
                                    <img src="{{ asset('assets_main/img/celana.2.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Celana</h4>
                                    <p>Celana Panjang Kasual</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 220.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative celana-item">
                                <div class="celana-img">
                                    <img src="{{ asset('assets_main/img/celana.3.png') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Celana</h4>
                                    <p>Celana Kulot Kasual </p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 250.000</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
