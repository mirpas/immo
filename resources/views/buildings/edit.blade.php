@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">Gebäude bearbeiten</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">

        @include('layouts.errors')

        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">{{ $building->short_name }} bearbeiten</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="/buildings/{{ $building->id }}">
        @method('PATCH')
	@csrf
            <div class="card-body">

            <div class="form-group">
                <label for="short_name">Kurzbezeichnung</label>
                <input type="text" class="form-control" id="short_name" placeholder="Kurzbezeichnung" name="short_name" value="{{ $building->short_name }}">
            </div>

            <div class="form-group">
                <label for="description">Bezeichnung</label>
                <input type="text" class="form-control" id="description" placeholder="Bezeichnung" name="description" value="{{ $building->description }}">
            </div>

            <div class="form-group">
                <label for="street">Straße</label>
                <input type="text" class="form-control" id="street" placeholder="Straße" name="street" value="{{ $building->street }}">
            </div>

            <div class="form-group">
                <label for="zip">PLZ</label>
                <input type="text" class="form-control" id="zip" placeholder="PLZ" name="zip" value="{{ $building->zip }}">
            </div>

            <div class="form-group">
                <label for="city">Stadt</label>
                <input type="text" class="form-control" id="city" placeholder="Stadt" name="city" value="{{ $building->city }}">
            </div>

            <div class="form-group">
                <label for="flurnummer">Flurnummer</label>
                <input type="text" class="form-control" id="flurnummer" placeholder="flurnummer" name="flurnummer" value="{{ $building->flurnummer }}">
            </div>

            <div class="form-group">
                <label for="ground_area">Grundfläche</label>
                <input type="text" class="form-control" id="ground_area" placeholder="Grundfläche" name="ground_area" value="{{ $building->ground_area }}">
            </div>

            <div class="form-group">
                <label for="building_area">Gebäudefläche</label>
                <input type="text" class="form-control" id="building_area" placeholder="Gebäudefläche" name="building_area" value="{{ $building->building_area }}">
            </div>

            <div class="form-group">
                <label for="year_of_construction">Baujahr</label>
                <input type="text" class="form-control" id="year_of_construction" placeholder="Baujahr" name="year_of_construction" value="{{ $building->year_of_construction }}">
            </div>

            <div class="form-group">
                <label for="path_to_energieausweis">Energieausweis</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="path_to_energieausweis" name="">
                    <label class="custom-file-label" for="path_to_energieausweis">Datei auswählen</label>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-warning float-right">Änderungen speichern</button>
        <a class="btn btn-default float-right mr-3" href="/buildings" role="button">Abbrechen</a>
    </div>
</form>
</div>

</div>
</div>
@stop
