@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold">{{ __('Data Dosen') }}</h3>
                    <a href="form.blade.php" class="btn btn-primary">Tambah Data</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIDN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>67348634</td>
                                <td>Maulian Saputra</td>
                                <td>mauliansaputra@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>8676538</td>
                                <td>Luthfi</td>
                                <td>luthfi@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>5655767</td>
                                <td>Hadi Syafputra</td>
                                <td>hadisyaf@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>78967867</td>
                                <td>Susi Yahya</td>
                                <td>susiyahya@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
