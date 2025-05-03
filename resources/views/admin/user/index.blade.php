@extends('layout.app')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
        {{ $title }}
    </h1>
    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div>
                <a href="{{ route('userCreate') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>
            <div>
                <a href="{{ route('userExcel') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>
                <a href="{{ route('userPdf') }}" class="btn btn-sm btn-danger" target="_blank">
                    <i class="fas fa-file-pdf mr-2"></i>
                    Pdf
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>

                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($user as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td class="text-center">
                                    <span class="badge badge-primary">
                                        {{ $item->email }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-pill {{ $item->jabatan == "Admin" ? "badge-dark" : "badge-info" }}">{{ $item->jabatan }}</span>
                                </td>
                                <td class="text-center">
                                    @if ($item->is_tugas == false)
                                    <span class="badge badge-danger badge-pill">Belum ditugaskan!</span>
                                    @else
                                    <span class="badge badge-success badge-pill">Sudah ditugaskan!</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('userEdit',$item->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @include('admin.user.modal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
