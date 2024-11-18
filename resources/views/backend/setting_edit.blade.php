@extends('backend.layout.app')

@section('title', 'Edit Setting')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">EDIT SETTING</h6>
            <form action="{{ route('setting.update', $setting->id_setting) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="key" class="form-label">Key</label>
                    <input type="text" class="form-control" id="key" name="key" value="{{ old('key', $setting->key) }}">
                    <div class="text-danger">
                        @error('key')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="value" class="form-label">Value</label>
                    <input type="text" class="form-control" id="value" name="value" value="{{ old('value', $setting->value) }}">
                    <div class="text-danger">
                        @error('value')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="5" name="deskripsi">{{ $setting->deskripsi }}</textarea>
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