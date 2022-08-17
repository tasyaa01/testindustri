@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Siswa</label>
                            <input type="text" class="form-control " name="nis" value="{{ $siswa->nis }}" readonly>
                        </div>
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $siswa->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control " name="kelas" value="{{ $siswa->kelas }}"readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control " name="jurusan" value="{{ $siswa->jurusan }}"readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection