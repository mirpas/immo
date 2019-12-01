@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Übersicht Verträge</h1>
@stop
@section('content')
<div class="row">
  <div class="col-12">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-plug"></i> Contracts</h3>
        <div class="card-tools">
          <a href="{{ route('contracts.create') }}" class="btn btn-block btn-success btn-xs mr-1"><i class="fas fa-plus"></i></a>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Gebäude</th>
                <th>Einheit</th>
                <th>Mieter</th>
                <th>Start</th>
                <th>Ende</th>
                <th style="width: 102px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($contracts as $contract)
              <tr>
                <td>{{ $contract->flat->building->short_name }}</td>
                <td>{{ $contract->flat->short_name }}</td>
                <td>
                @foreach($contract->contacts as $contact)
                  {{ $contact->surname . ', ' . $contact->prename }}<br>
                @endforeach
                </td>
                <td>{{ $contract->start_date }}</td>
                <td>{{ $contract->end_date }}</td>
                <td><a href="{{ route('contracts.edit', $contract->id) }}" class="btn btn-block btn-warning btn-xs"><i class="fas fa-edit"></i></a> </td>
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
