@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('activity.create')}}" class="btn btn-outline-primary">Register</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-2 py-2">
                    <h4 class="text muted">Master pendaftaran</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode pendaftaran</th>
                                <th>Nama Kegiatan</th>
                                <th>nama</th>
                                <th>tanggal daftar</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cipoy</td>
                                <td>Shopp</td>
                                <td>03/01/03</td>
                                <td>transformasi</td>
                                <td>Smile</td>
                                <td>
                                    <a href="{{route('register.ambil-formulir')" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-outline-danger btn-sm">show</a>
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