@extends('dashboard.layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Biodata</h1>
    </div>

    <form method="post" action="/dashboard/biodata/{{ $user->id }}">
        @method('put')
        @csrf
        <div class="my-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                autofocus value="{{ old('nama', $user->biodata->nama) }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="alamat" name="alamat"
                value="{{ old('alamat', $user->biodata->alamat) }}">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                value="{{ old('tgl_lahir', $user->biodata->tgl_lahir) }}">
        </div>
        <div class="mb-3">
            <label for="posisi_dilamar" class="form-label">Posisi Dilamar</label>
            <input type="text" class="form-control" id="posisi_dilamar" name="posisi_dilamar"
                value="{{ old('posisi_dilamar', $user->biodata->posisi_dilamar) }}">
        </div>

        <br>
        <a href="/dashboard/biodata"><span class="btn btn-danger"><i class="bi bi-arrow-left-square">
                    Back</i></span></a>
        <button type="submit" class="btn btn-primary"><i class="bi bi-upload"> Upload</i></button>
    </form>
@endsection
