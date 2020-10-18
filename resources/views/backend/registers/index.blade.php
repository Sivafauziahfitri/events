@extends('layouts.app')

@section('content')
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-0">
            <div class="card-body">
              <div class="d-flex px-2 py-2">
                <div>
                <a href="{{route('backend.registers.create')}}" class="btn btn-info">Pendaftaran</a>
                </div>
              </div>
              <div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Kode Pendaftaran</th>
                      <th>Kode Kegiatan</th>
                      <th>Nama</th>
                      <th>Tanggal Daftar</th>
                      <th>Status</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>EVO1234567890</th>
                      <th>KEG1234567890</th>
                      <th>Miracle</th>
                      <th>011019</th>
                      <th>Wait</th>
                      <th>
                        <a href="{{{route('backend.registers.show')}}}" class="btn btn-info">Tampilkan</a>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection