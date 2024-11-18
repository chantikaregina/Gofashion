@extends('backend.layout.app')

@section('title', 'Category')

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
            <h6 class="mb-4">Category</h6>
            <div class="table-responsive">
                <table class="table" id="category">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorys as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->nama_category }}</td>
                            <td>{{ $category->deskripsi }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->id_category) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('category.delete', $category->id_category) }}"  onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-primary btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#category').DataTable();
    });
</script>

@endsection