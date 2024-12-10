@extends('backend.layout.app')

@section('title', 'Tambah Product')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">TAMBAH PRODUCT</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="id_category" class="form-label">Nama Kategori</label>
                                <select name="id_category" id="id_category" class="form-select">
                                    <option value="">-Pilih-</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->id_category }}">{{ $category->nama_category }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('id_category')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_product" class="form-label">Nama Product</label>
                                <input type="text" class="form-control" id="nama_product" name="nama_product">
                                <div class="text-danger">
                                    @error('nama_product')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                                <div class="text-danger">
                                    @error('deskripsi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="harga_product" class="form-label">Harga Product</label>
                                <input type="text" class="form-control" id="harga_product" name="harga_product">
                                <div class="text-danger">
                                    @error('harga_product')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="stock_product" class="form-label">Stock</label>
                                <select name="stock_product" class="form-control" id="stock_product">
                                    <option value="">-Pilih-</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                </select>
                                <div class="text-danger">
                                    @error('stock_product')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
