<!DOCTYPE html>
<html lang="de"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Immobilien | Marschall</title>
    <link rel="stylesheet" href="http://immo.localhost/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://immo.localhost/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://immo.localhost/vendor/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-minimal.min.css">
    <link rel="stylesheet" href="http://immo.localhost/vendor/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="http://immo.localhost/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="login-page pace-done" cz-shortcut-listen="true" style="min-height: 447px;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

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

<script src="http://immo.localhost/vendor/jquery/jquery.min.js"></script>
<script src="http://immo.localhost/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://immo.localhost/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="http://immo.localhost/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="http://immo.localhost/vendor/adminlte/dist/js/adminlte.min.js"></script>

</body>
</html>
