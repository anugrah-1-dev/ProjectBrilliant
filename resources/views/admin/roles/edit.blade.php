@extends('adminlte::page')

@section('title', 'Edit Role')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">Edit Role</h1>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-adminlte-card theme="lightblue" theme-mode="outline" title="Form Edit Role">
                <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nama Role <span class="text-danger">*</span></label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            value="{{ old('name', $role->name) }}"
                            placeholder="Masukkan nama role"
                            required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="guard_name">Guard Name</label>
                        <input type="text"
                            class="form-control"
                            id="guard_name"
                            value="{{ $role->guard_name }}"
                            disabled>
                        <small class="text-muted">Guard name tidak dapat diubah.</small>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary btn-sm mr-2">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </x-adminlte-card>
        </div>
    </div>
@stop

@section('js')
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ session('error') }}',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
@endif
@stop
