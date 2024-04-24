@extends('dashboard.layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Biodata</h1>
    </div>

    <a href="/dashboard/biodata/{{ $user->id }}/edit"><span class="btn btn-success mb-3"><i class="bi bi-pencil-square">
                edit</i></span></a>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nama</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->biodata->nama }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Alamat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->biodata->alamat }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Tanggal lahir</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->biodata->tgl_lahir }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Posisi Dilamar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->biodata->posisi_dilamar }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Riwayat Pendidikan</h1>
    </div>
    <div class="row">

        @foreach ($user->biodata->pendidikan as $item)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    {{ $item->nama_instansi }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $item->jenjang }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Riwayat Pelatihan</h1>
    </div>
    <div class="row">
        @foreach ($user->biodata->pelatihan as $item)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Posisi Dilamar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->biodata->posisi_dilamar }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Riwayat Pekerjaan</h1>
    </div>
    <div class="row">
        @foreach ($user->biodata->pekerjaan as $item)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Posisi Dilamar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->biodata->posisi_dilamar }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
