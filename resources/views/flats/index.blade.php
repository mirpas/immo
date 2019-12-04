@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Mieteinheiten Übersicht</h1>
@stop
@section('content')
<div class="row">
  <div class="col-12">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-home"></i> Flats</h3>
        <div class="card-tools">
          <a href="/flats/create" class="btn btn-block btn-success btn-xs mr-1"><i class="fas fa-plus"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped dataTable" id="flats">
            <thead>
              <tr>
                <th>Kurzname</th>
                <th>Typ</th>
                <th>Stockwerk</th>
                <th>Wohnfläche</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($flats as $flat)
              <tr>
                <td>{{ $flat->short_name }}</td>
                <td>{{ $flat->flatType->description }}</td>
                <td>{{ $flat->floor }}</td>
                <td>{{ $flat->living_area }}</td>
                <td><a href="/flats/{{ $flat->id }}/edit" class="btn btn-block btn-warning btn-xs"><i class="fas fa-edit"></i></a> </td>
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

@section('js')
<script>
  $(document).ready(function() {
    $('#flats').DataTable();
  });
</script>
@stop
