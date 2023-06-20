@extends('main')
@section('content')
    <div class="container">
        <h1>Daftar Pasien</h1>
        <br>
        @if (Auth::user()->role == 'Admin')
            <a href="/pasien/create" class="btn btn-primary">+ Tambah Pasien</a>
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
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Dokter Penangan</th>
                    @if (Auth::user()->role == 'Admin')
                        <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($pasiens as $item)
                    <tr>
                        <td>{{ $iteration++ }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @if ($item->jk == 'L')
                                Laki-Laki
                            @else
                                Perempuan
                            @endif
                        </td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->tlp }}</td>
                        <td>{{ $item->dokter->nama }}</td>
                        @if (Auth::user()->role == 'Admin')
                            <td>
                                <a href="/pasien/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/pasien" method="POST" class="d-inline">
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
