@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">Neues Gebäude anlegen</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">

        @include('layouts.errors')

        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Gebäudedaten</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="/buildings">
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="short_name">Kurzbezeichnung</label>
                <input type="text" class="form-control" id="short_name" placeholder="Kurzbezeichnung" name="short_name" value="">
            </div>

            <div class="form-group">
                <label for="description">Bezeichnung</label>
                <input type="text" class="form-control" id="description" placeholder="Bezeichnung" name="description" value="">
            </div>

            <div class="form-group">
                <label for="street">Straße</label>
                <input type="text" class="form-control" id="street" placeholder="Straße" name="street" value="">
            </div>

            <div class="form-group">
                <label for="zip">PLZ</label>
                <input type="text" class="form-control" id="zip" placeholder="PLZ" name="zip" value="">
            </div>

            <div class="form-group">
                <label for="city">Stadt</label>
                <input type="text" class="form-control" id="city" placeholder="Stadt" name="city" value="">
            </div>

            <div class="form-group">
                <label for="flurnummer">Flurnummer</label>
                <input type="text" class="form-control" id="flurnummer" placeholder="flurnummer" name="flurnummer" value="">
            </div>

            <div class="form-group">
                <label for="ground_area">Grundfläche</label>
                <input type="text" class="form-control" id="ground_area" placeholder="Grundfläche" name="ground_area" value="">
            </div>

            <div class="form-group">
                <label for="building_area">Gebäudefläche</label>
                <input type="text" class="form-control" id="building_area" placeholder="Gebäudefläche" name="building_area" value="">
            </div>

            <div class="form-group">
                <label for="year_of_construction">Baujahr</label>
                <input type="text" class="form-control" id="year_of_construction" placeholder="Baujahr" name="year_of_construction" value="">
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
        <button type="submit" class="btn btn-success float-right">Anlegen</button>
        <a class="btn btn-default float-right mr-3" href="/buildings" role="button">Abbrechen</a>
    </div>
</form>
</div>

</div>
</div>
@stop
