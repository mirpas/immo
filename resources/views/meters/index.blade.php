@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Übersicht Zähler</h1>
@stop
@section('content')
<div class="row">
  <div class="col-12">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-plug"></i> Meter</h3>
        <div class="card-tools">
          <a href="{{ route('meters.create') }}" class="btn btn-block btn-success btn-xs mr-1"><i class="fas fa-plus"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped dataTable" id="meters">
            <thead>
              <tr>
                <th>Typ</th>
                <th>Ident-Nr.</th>
                <th>Einheit</th>
                <th>Geeicht</th>
                <th>Info</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($meters as $meter)
              <tr>
                <td>{{ $meter->meterType->description }}</td>
                <td>{{ $meter->ident }}</td>
                <td>{{ $meter->unit }}</td>
                <td>{{ $meter->geeicht_am }}</td>
                <td>{{ $meter->info }}</td>
                <td><a href="{{ route('meters.edit', $meter->id) }}" class="btn btn-block btn-warning btn-xs"><i class="fas fa-edit"></i></a> </td>
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
@include('layouts.datatables-js', ['table' => 'meters'])
@stop
