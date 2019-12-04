@extends('adminlte::master')

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', 'login-page')


@section('body')

<div class="login-box">
    <div class="login-logo">
        <p>Gebäudeauswahl</p>
    </div>
    <form method="POST" action="{{ route('buildings.select.select') }}">
    @method('POST')
    @csrf
        @foreach($buildings as $building)
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $building->short_name }}</h3>
                <div class="card-tools">
                    <span class="badge badge-warning">{{ count($building->flats) }} Einheiten</span>
                </div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <p>
                        {{ $building->street }} <br>
                        {{ $building->zip . ' ' . $building->city }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="https://icons-for-free.com/iconfiles/png/512/building+construction+home+house+icon-1320168078405076035.png" alt="building-thumbnail" class="img-fluid">
                    </div>
                </div><!-- /.row -->
            </div><!-- /.card-body -->
            <button type="submit" class="btn stretched-link m-0 p-0" name="building_id" value="{{ $building->id }}"></button>
        </div><!-- /.card -->
        @endforeach
    </form>
</div>


@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
