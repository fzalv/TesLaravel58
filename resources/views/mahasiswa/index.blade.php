@extends('layout.main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-2">
            <h1>Halaman Mahasiswa </h1>

            <table class="table">
                <thead class="thead-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Opsi</th>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bagas</td>
                        <td>10101010</td>
                        <td>asd@yahoo.com</td>
                        <td>Teknik Kuli</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection