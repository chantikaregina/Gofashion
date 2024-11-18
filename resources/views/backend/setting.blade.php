@extends('backend.layout.app')

@section('title', 'Setting')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h6 class="mb-4">Setting</h6>
            <div class="table-responsive">
                <table class="table" id="setting">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings as $setting)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $setting->key }}</td>
                            <td>{{ $setting->value }}</td>
                            <td>{{ $setting->deskripsi }}</td>
                            <td>
                                <a href="{{ route('setting.edit', $setting->id_setting) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#setting').DataTable();
    });
</script>

@endsection