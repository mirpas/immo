@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Buildings</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                <!-- TABLE -->
                    <div class="card">
                          <div class="card-body p-0">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Straße</th>
                                  <th>PLZ</th>
                                  <th>Ort</th>
                                  <th>Grundfläche</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($buildings as $building)
                                <tr>
                                  <td>{{ $building->id }}</td>
                                  <td> {{ $building->short_name }}</td>
                                  <td> {{ $building->street }}</td>
                                  <td> {{ $building->zip }}</td>
                                  <td> {{ $building->city }}</td>
                                  <td> {{ $building->ground_area }}</td>
                                  <td> <a href="/building/{{ $building->id }}/edit" class="btn btn-block btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a> </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                <!-- /TABLE -->


                </div>
            </div>
        </div>
    </div>
@stop
