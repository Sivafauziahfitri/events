@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="mb-3">
      
      </div>

      <div class="card border-0 shadow">
        <div class="px-3 py-3">
          <h4 class="text-muted">Master Kegiatan</h4>
          <a href="{{route('backend.kegiatan.create')}}" class="btn btn-outline-primary">
          tambah kegiatan
      </a>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Kode Kegiatan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Option</th>
              </tr>
              {$activity->date}}</td>
              {$activity->status}}</td>

             <form action="{{route('activitys.delete'. $activity->id)}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-outline-danger btn-sm">Hapus</button>
              </form>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

