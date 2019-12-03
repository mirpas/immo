@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Gebäude auswählen</h1>
@stop

@section('content')

<form method="POST" action="{{ route('buildings.selector') }}">
@csrf
    <div class="row">
    @foreach($buildings as $building)
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <p class="mb-0">{{ $building->id }}</p>
                <p class="mb-0">{{ $building->short_name }}</p>
                <button type="submit" class="btn btn-success" value="{{ $building->id }}" name="building_id" >Gebäude anlegen</button>
            </div>
        </div>
    </div>{{-- ./col-3 --}}
    @endforeach
    </div>
</form>
@stop
