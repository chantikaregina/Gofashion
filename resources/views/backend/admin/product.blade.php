@extends('backend.admin.layout.app')

@section('title', 'product')

@section('content')

    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-5.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Sweater</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-5.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Jaket</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-2.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Dress</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Dress</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-4.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Celana</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-3.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Rok</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Rok</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-1.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Hijab</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Hijab</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-2.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Blazer</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Blazer</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-5.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Abaya</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Abaya</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
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
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Grapes</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Rok</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Raspberries</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
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
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="{{ asset('assets_main/img/fruite-item-1.jpg') }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Sweater</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Oranges</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Jaket</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Apple</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
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
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Dress</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Grapes</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Celana</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Apricots</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
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
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Rok</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Banana</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Fruits</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Raspberries</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                        <a href="#"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">Fruits</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>Oranges</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod te incididunt</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
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
