@extends('dashboard.layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Member</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Posisi Dilamar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $m)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $m->biodata->nama ?? ' ' }}</td>
                                <td>{{ $m->biodata->alamat ?? ' ' }}, {{ $m->biodata->tgl_lahir ?? ' ' }}</td>
                                <td>{{ $m->biodata->posisi_dilamar ?? ' ' }}</td>
                                <td>
                                    <a href="/dashboard/member/{{ $m->id }}"><button
                                            class="btn btn-info btn-sm mt-1"><i class="bi bi-eye"> Lihat</i></button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
