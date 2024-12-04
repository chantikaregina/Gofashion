@extends('frontend.layout.app')

@section('title', 'Cart')

@section('content')

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Cart</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0; // Untuk menghitung total harga semua item di keranjang
                        @endphp
                        @if (!empty($cart))
                            @foreach ($cart as $index => $item)
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $item['foto']) }}"
                                                class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;"
                                                alt="">
                                        </div>
                                    </th>
                                    <td>
                                        <p class="mb-0 mt-4">{{ $item['name'] }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4">Rp. {{ number_format($item['price'], 0, ',', '.') }}</p>
                                    </td>
                                    <td>
                                        <div class="input-group quantity mt-4" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <!-- Form untuk mengurangi jumlah -->
                                                <form action="{{ route('cart.update', $index) }}" method="POST"
                                                    class="update-cart-form" data-action="minus">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="button"
                                                        class="btn btn-sm btn-minus rounded-circle bg-light border"
                                                        onclick="submitCartForm(this)">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <input type="text" class="form-control form-control-sm text-center border-0"
                                                value="{{ $item['quantity'] }}" readonly>
                                            <div class="input-group-btn">
                                                <!-- Form untuk menambah jumlah -->
                                                <form action="{{ route('cart.update', $index) }}" method="POST"
                                                    class="update-cart-form" data-action="plus">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="button"
                                                        class="btn btn-sm btn-plus rounded-circle bg-light border"
                                                        onclick="submitCartForm(this)">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $itemTotal = $item['price'] * $item['quantity'];
                                            $total += $itemTotal;
                                        @endphp
                                        <p class="mb-0 mt-4">Rp. {{ number_format($itemTotal, 0, ',', '.') }}</p>
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.delete', $index) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">Keranjang Anda kosong</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>

            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-12">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Subtotal:</h5>
                                <p class="mb-0">Rp. {{ number_format($total, 0, ',', '.') }}</p>
                            </div>
                            <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                                <h5 class="mb-0 ps-4 me-4">Total</h5>
                                <p class="mb-0 pe-4">Rp. {{ number_format($total, 0, ',', '.') }}</p>
                            </div>
                            @php
                                $whatsappNumber = '6285766642706'; // Ganti dengan nomor tujuan
                                $cartMessage = "Halo, saya ingin memesan:\n";
                                if ($cart) {
                                    foreach ($cart as $item) {
                                        $cartMessage .=
                                            '- ' .
                                            $item['name'] .
                                            ' (x' .
                                            $item['price'] .
                                            '): Rp. ' .
                                            number_format($item['price'], 0, ',', '.') .
                                            "\n";
                                    }
                                    $cartMessage .= 'Total: Rp. ' . number_format($total, 0, ',', '.') . "\n";
                                } else {
                                    $cartMessage .= 'Keranjang saya kosong.';
                                }
                                $whatsappUrl = "https://wa.me/$whatsappNumber?text=" . urlencode($cartMessage);
                            @endphp

                            <form action="{{ route('cart.order.confirm') }}" method="POST">
                                @csrf
                                <button
                                    class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                                    type="button" onclick="confirmOrder('{{ $whatsappUrl }}')">
                                    ORDER WHATSAPP
                                </button>
                            </form>

                            <script>
                                function confirmOrder(url) {
                                    // Menampilkan konfirmasi dengan pesan
                                    var userConfirmed = confirm("Apakah Anda yakin ingin mengirim pesanan ini ke WhatsApp?");

                                    // Jika pengguna mengonfirmasi, arahkan ke WhatsApp, jika tidak, kembali ke halaman sebelumnya
                                    if (userConfirmed) {
                                        window.location.href = url;
                                    } else {
                                        window.history.back(); // Kembali ke halaman sebelumnya
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->
    </div>
    <!-- Cart Page End -->
    <script>
        // Fungsi untuk menangani form submit berdasarkan action
        function submitCartForm(button) {
            var form = button.closest('form'); // Mendapatkan form terdekat
            var action = form.getAttribute('data-action'); // Ambil nilai action dari atribut data-action
            var inputAction = document.createElement('input');
            inputAction.setAttribute('type', 'hidden');
            inputAction.setAttribute('name', 'action');
            inputAction.setAttribute('value', action); // Set value action sebagai minus atau plus
            form.appendChild(inputAction); // Tambahkan input tersembunyi ke form
            form.submit(); // Kirimkan form
        }
    </script>

@endsection
