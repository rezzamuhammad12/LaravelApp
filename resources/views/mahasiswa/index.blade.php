@extends('templates/main')

@section('title', 'Daftar Mahasiswa')

@section('container')


<div class="container">
    <div class="col">
        <div class="row">
            <h1>Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- php foreach di laravel menggunakan yield -->
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection