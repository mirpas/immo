@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Übersicht Kontakte</h1>
@stop
@section('content')
<div class="row">
  <div class="col-12">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-plug"></i> Contacts</h3>
        <div class="card-tools">
          <a href="{{ route('contacts.create') }}" class="btn btn-block btn-success btn-xs mr-1"><i class="fas fa-plus"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped dataTable" id="contacts">
            <thead>
              <tr>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Straße</th>
                <th>PLZ</th>
                <th>Ort</th>
                <th style="width: 102px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($contacts as $contact)
              <tr>
                <td>{{ $contact->prename }}</td>
                <td>{{ $contact->surname }}</td>
                <td>{{ $contact->street }}</td>
                <td>{{ $contact->zip }}</td>
                <td>{{ $contact->city }}</td>
                <td><a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-block btn-warning btn-xs"><i class="fas fa-edit"></i></a> </td>
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
    $('#contacts').DataTable();
  });
</script>
@stop
