@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold">{{ __('Data Dosen') }}</h3>
                    <a href="dosen/tambah" class="btn btn-primary">Tambah Data</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIDN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>67348634</td>
                                <td>Maulian Saputra</td>
                                <td>mauliansaputra@gmail.com</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">lihat</a>
                                    <a href="" class="btn btn-info btn-sm">edit</a>
                                    <a href="" class="btn btn-danger btn-sm">hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>78967867</td>
                                <td>Susi Yahya</td>
                                <td>susiyahya@gmail.com</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">lihat</a>
                                    <a href="" class="btn btn-info btn-sm">edit</a>
                                    <a href="" class="btn btn-danger btn-sm">hapus</a>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
