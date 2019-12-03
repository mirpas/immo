@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Gebäudeübersicht</h1>
@stop
@section('content')
<div class="row">
  <div class="col-12">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-building"></i> Buildings</h3>
        <div class="card-tools">
          <a href="/buildings/create" class="btn btn-block btn-success btn-xs mr-1"><i class="fas fa-plus"></i></a>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Kurzname</th>
                <th>Straße</th>
                <th>PLZ</th>
                <th>Ort</th>
                <th>Baujahr</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($buildings as $building)
              <tr>
                <td>{{ $building->short_name }}</td>
                <td>{{ $building->street }}</td>
                <td>{{ $building->zip }}</td>
                <td>{{ $building->city }}</td>
                <td>{{ $building->year_of_construction }}</td>
                <td><a href="/buildings/{{ $building->id }}/edit" class="btn btn-block btn-warning btn-xs"><i class="fas fa-edit"></i></a> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>{{-- /.table-responsive --}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /TABLE -->
  </div>
</div>
@stop
