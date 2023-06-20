@extends('main')
@section('content')
    <div class="container">
        <h1>Daftar Dokter</h1>
        <br>
        @if (Auth::user()->role == 'Admin')
            <a href="/dokter/create" class="btn btn-primary">+ Tambah Dokter</a>
        @endif
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    @if (Auth::user()->role == 'Admin')
                        <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($dokters as $item)
                    <tr>
                        <td>{{ $iteration++ }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->spesialis }}</td>
                        <td>{{ $item->tlp }}</td>
                        <td>{{ $item->alamat }}</td>
                        @if (Auth::user()->role == 'Admin')
                            <td>
                                <a href="/dokter/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/dokter" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
