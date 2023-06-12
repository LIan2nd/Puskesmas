@extends('main')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Dokter</h1>
        <br>
        <a href="/dokter" class="btn btn-primary">
            Back</a>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/dokter/{{ $dokter->id }}" method="post" class="mx-2">
            @method('put')
            <div class="form-group mt-3">
                @csrf
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Dokter"
                    value="{{ $dokter->nama }}">
            </div>
            @if ($errors->any())
                <div class="text-danger small">
                    @foreach ($errors->all() as $message)
                        {{ $message }}
                    @endforeach
                </div>
            @endif

            <div class="form-group mt-3">
                <label for="spesialis">Spesialis</label>
                <select class="form-control" name="spesialis">
                    <option value="Gigi" {{ $dokter->spesialis == 'Gigi' ? 'selected' : '' }}>Spesialis Gigi</option>
                    <option value="Mata" {{ $dokter->spesialis == 'Mata' ? 'selected' : '' }}>Spesialis Mata</option>
                    <option value="Jantung" {{ $dokter->spesialis == 'Jantung' ? 'selected' : '' }}>Spesialis Jantung
                    </option>
                    <option value="Jiwa" {{ $dokter->spesialis == 'Jiwa' ? 'selected' : '' }}>Spesialis Jiwa</option>
                </select>
            </div>


            <div class="form-group mt-3">
                <label for="tlp">No. Telp</label>
                <input type="text" class="form-control" name="tlp" placeholder="Masukkan No. Telp"
                    value="{{ $dokter->tlp }}">
            </div>
            <div class="form-group mt-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat">{{ $dokter->alamat }}</textarea>
            </div>

            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
@endsection
