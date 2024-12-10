@extends ('frontend.layout.app')

@section('title', 'Shop Detail')

@section('content')


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop Detail</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">Shop Detail</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            @if (session('success'))
                <div class="alert alert-success">
                    <div class="text-center">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="row g-4 mb-5">
                <div class="col-lg-10 col-xl-12">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <a href="">
                                    <img src="{{ asset('storage/' . $product->foto) }}" class="img-fluid rounded"
                                        alt="Image" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3">{{ $product->nama_product }}</h4>
                            <p class="mb-3">Category: {{ $product->category->nama_category }}</p>
                            <p class="mb-3">Stock: {{ $product->stock_product }}</p>
                            <h5 class="fw-bold mb-3">Rp. {{ number_format($product->harga_product, 0, ',', '.') }}</h5>
                            <div class="d-flex my-3">
                                @php
                                    // Tentukan jumlah bintang berdasarkan rating rata-rata
                                    $fullStars = floor($product->average_rating); // Bintang penuh
                                    $halfStar = $product->average_rating - $fullStars >= 0.5 ? 1 : 0; // Bintang setengah
                                    $emptyStars = 5 - $fullStars - $halfStar; // Bintang kosong
                                @endphp

                                <!-- Tampilkan bintang penuh -->
                                @for ($i = 0; $i < $fullStars; $i++)
                                    <i class="fas fa-star text-warning"></i>
                                @endfor

                                <!-- Tampilkan bintang setengah -->
                                @if ($halfStar)
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                @endif

                                <!-- Tampilkan bintang kosong -->
                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <i class="fas fa-star text-muted"></i>
                                @endfor
                            </div>
                            <p class="mb-4">{{ $product->deskripsi }}</p>
                            @if ($product->stock_product == 'Tersedia')
                                <div class="input-group quantity mb-5" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" type="button"
                                            id="btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0"
                                        value="1" id="quantity-input" name="quantity">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border" type="button"
                                            id="btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <form action="{{ route('add.to.cart') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                                    <input type="hidden" id="hidden-quantity" name="quantity" value="1">
                                    <!-- Nilai yang akan dikirim -->
                                    <button type="submit"
                                        class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                    </button>
                                </form>
                            @else
                                <div>
                                    <button class="btn border border-secondary rounded-pill px-3 text-primary">
                                        Stock Kosong
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                        id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                        aria-controls="nav-mission" aria-selected="false">Komentar</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-mission" role="tabpanel"
                                    aria-labelledby="nav-mission-tab">
                                    @foreach ($reviews as $review)
                                        <p class="mb-2" style="font-size: 14px;">{{ $review->created_at }}</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>{{ $review->nama }}</h5>
                                            <div class="d-flex mb-3">
                                                <!-- Menampilkan bintang berdasarkan rating_product -->
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i
                                                        class="fa fa-star {{ $i <= $review->rating_produk ? 'text-warning' : '' }}"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <p>{{ $review->komentar }} </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('review') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                            <h4 class="mb-5 fw-bold">Komentar</h4>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="border-bottom rounded">
                                        <input type="text" class="form-control border-0 me-4" name="nama"
                                            placeholder="Nama *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="border-bottom rounded">
                                        <input type="email" class="form-control border-0" name="email"
                                            placeholder="Email *">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-bottom rounded my-4">
                                        <textarea id="" class="form-control border-0" cols="30" rows="8" name="komentar"
                                            placeholder="Komentar *" spellcheck="false"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between py-3 mb-5">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-3">Berikan rating:</p>
                                            <div class="d-flex align-items-center" style="font-size: 12px;">
                                                <i class="fa fa-star text-muted" id="star-1" onclick="rate(1)"></i>
                                                <i class="fa fa-star text-muted" id="star-2" onclick="rate(2)"></i>
                                                <i class="fa fa-star text-muted" id="star-3" onclick="rate(3)"></i>
                                                <i class="fa fa-star text-muted" id="star-4" onclick="rate(4)"></i>
                                                <i class="fa fa-star text-muted" id="star-5" onclick="rate(5)"></i>
                                            </div>
                                        </div>
                                        <!-- Formulir untuk mengirimkan rating ke database -->
                                        <form action="" method="POST" id="rating-form">
                                            @csrf
                                            <input type="hidden" name="rating_produk" id="rating-value" value="0">
                                            <button type="submit"
                                                class="btn border border-secondary text-primary rounded-pill px-4 py-3">Unggah
                                                Komentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    function rate(rating) {
                        // Update warna bintang sesuai dengan rating yang dipilih
                        for (let i = 1; i <= 5; i++) {
                            const star = document.getElementById('star-' + i);
                            if (i <= rating) {
                                star.classList.remove('text-muted');
                                star.classList.add('text-warning'); // Ubah jadi kuning
                            } else {
                                star.classList.remove('text-warning');
                                star.classList.add('text-muted'); // Ubah kembali jadi abu-abu
                            }
                        }

                        // Set nilai rating ke input hidden
                        document.getElementById('rating-value').value = rating;
                    }
                </script>

                <script>
                    // Variabel untuk nilai tampilan dan nilai yang dikirim
                    var displayQuantity = 1; // Nilai yang ditampilkan di input
                    var sendQuantity = 1; // Nilai yang dikirim ke server

                    // Tombol element
                    var btnMinus = document.getElementById('btn-minus');
                    var btnPlus = document.getElementById('btn-plus');

                    // Tombol "+" event listener
                    btnPlus.addEventListener('click', function() {
                        // Increment nilai yang dikirim
                        sendQuantity++;

                        // Update tampilan dan nilai yang dikirim
                        displayQuantity = sendQuantity - 1; // Menampilkan satu langkah lebih kecil dari nilai yang dikirim
                        updateValues();
                    });

                    // Tombol "-" event listener
                    btnMinus.addEventListener('click', function() {
                        if (sendQuantity > 1) { // Pastikan nilai yang dikirim tidak kurang dari 1
                            sendQuantity--;
                            displayQuantity = sendQuantity + 1; // Menampilkan satu langkah lebih kecil dari nilai yang dikirim
                        }
                        updateValues();
                    });

                    // Fungsi untuk memperbarui nilai tampilan dan yang dikirim
                    function updateValues() {
                        // Update nilai yang ditampilkan di input
                        document.getElementById('quantity-input').value = displayQuantity;

                        // Update nilai yang dikirim
                        document.getElementById('hidden-quantity').value = sendQuantity;

                        // Disable tombol minus jika displayQuantity kurang dari atau sama dengan 1
                        if (sendQuantity <= 1) {
                            btnMinus.disabled = true;
                        } else {
                            btnMinus.disabled = false;
                        }
                    }

                    // Menyinkronkan dengan perubahan manual di input
                    document.getElementById('quantity-input').addEventListener('input', function() {
                        var manualInputValue = parseInt(this.value);
                        if (!isNaN(manualInputValue) && manualInputValue >= 1) {
                            // Update nilai yang ditampilkan sesuai dengan input manual
                            displayQuantity = manualInputValue;

                            // Update nilai yang dikirim dengan menggunakan input manual
                            sendQuantity = displayQuantity; // Mengirim nilai yang sama dengan input manual, tanpa tambahan 1

                            updateValues();
                        } else {
                            // Jika nilai tidak valid, kembalikan ke nilai minimal
                            this.value = 1;
                            displayQuantity = 1;
                            sendQuantity = 1;
                            updateValues();
                        }
                    });

                    // Inisialisasi awal untuk tombol minus
                    updateValues();
                </script>
            @endsection
        </div>
    </div>
</div>
