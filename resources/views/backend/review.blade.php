@extends('backend.layout.app')

@section('title', 'Review')

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
            <h6 class="mb-4">Review</h6>
            <div class="table-responsive">
                <table class="table" id="review">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $review)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $review->nama }}</td>
                            <td>{{ $review->email }}</td>
                            <td>
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star {{ $i <= $review->rating_produk ? 'text-warning' : '' }}"></i>
                            @endfor
                            </td>
                            <td>{{ $review->komentar }}</td>
                            <td>
                                <a href="{{ route('review.delete', ['id_product' => $review->id_product, 'id' => $review->id_review]) }}"  onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-primary btn-sm">Hapus</a>
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
        $('#review').DataTable();
    });
</script>

@endsection
