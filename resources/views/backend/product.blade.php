@extends('backend.layout.app')

@section('title', 'Product')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                <div class="text-center">
                {{ session('success') }}
                </div>
            </div>
            @endif
            <h6 class="mb-4">Product</h6>
            <div class="table-responsive">
                <table class="table" id="category">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Nama Product</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga Product</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->category->nama_category }}</td>
                            <td>{{ $product->nama_product }}</td>
                            <td>{{ $product->deskripsi }}</td>
                            <td>{{ $product->harga_product }}</td>
                            <td>{{ $product->stock_product }}</td>
                            <td>{{ $product->foto }}</td>
                            <td>
                                <a href="{{ route('product.edit', $product->id_product) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('product.update', $product->id_product) }}"  onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-primary btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#product').DataTable();
    });
</script>

@endsection
