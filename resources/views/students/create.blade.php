@extends('layout.main')

@section('title', 'Form')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6 mt-2">
            <h3>Form Tambah Data Mahasiswa </h3>

            <form method="POST" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama">
                    @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukan NIM">
                    @error('nim') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Email">
                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan">
                    @error('jurusan') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection