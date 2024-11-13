@extends('backend.admin.layout.app')

@section('title', 'Edit Category')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">EDIT CATEGORY</h6>
            <form action="{{ route('admin.category.update', $category->id_category) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_category" class="form-label">Nama Category</label>
                    <input type="text" class="form-control" id="nama_category" name="nama_category" value="{{ old('nama_category', $category->nama_category) }}">
                    <div class="text-danger">
                        @error('nama_category')
                        {{ $message }}
                        @enderror
                    </div> 
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="5" name="deskripsi">{{ $category->deskripsi }}</textarea>
                    <div class="text-danger">
                        @error('deskripsi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection