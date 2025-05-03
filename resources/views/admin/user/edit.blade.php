@extends('layout.app')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-edit mr-2"></i>
        {{ $title }}
    </h1>
    <div class="card">
        <div class="card-header bg-warning">
            <a href="{{ route('user') }}" class="btn btn-sm btn-success">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('userUpdate', $user->id) }}" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-xl-6 mb-1">
                        <label for="" class="form-label">
                            <span class="text-danger">*</span>
                            Nama :
                        </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $user->nama }}">
                        @error('nama')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    </div>
                    <div class="col-xl-6 mb-1">
                        <label for="" class="form-label">
                            <span class="text-danger">*</span>
                            Email :
                        </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
                        @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-12 mb-1">
                        <label for="" class="form-label">
                            <span class="text-danger">*</span>
                            Jabatan :
                        </label>
                        <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                            <option selected disabled>--- Pilih Jabatan ---</option>
                            <option value="Admin" {{ $user->jabatan == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Karyawan" {{ $user->jabatan == 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
                        </select>
                        @error('jabatan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-6 mb-1">
                        <label for="" class="form-label">
                            <span class="text-danger">*</span>
                            Password :
                        </label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-1">
                        <label for="" class="form-label">
                            <span class="text-danger">*</span>
                            Konfirmasi password :
                        </label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
