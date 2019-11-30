@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Neues Gebäude anlegen</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('buildings.store') }}" id="createForm">
	@csrf
	<div class="row">
		<div class="col-md-6">
			<div class="card card-success">
				<div class="card-header">
					<h3 class="card-title">Basic</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">
					<div class="form-group">
						<label for="short_name">Kurzbezeichnung</label>
						<input type="text" class="form-control" id="short_name" placeholder="Kurzbezeichnung" name="short_name" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="description">Bezeichnung</label>
						<input type="text" class="form-control" id="description" placeholder="Bezeichnung" name="description" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="street">Straße</label>
						<input type="text" class="form-control" id="street" placeholder="Straße" name="street" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="zip">PLZ</label>
						<input type="text" class="form-control" id="zip" placeholder="PLZ" name="zip" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="city">Stadt</label>
						<input type="text" class="form-control" id="city" placeholder="Stadt" name="city" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="flurnummer">Flurnummer</label>
						<input type="text" class="form-control" id="flurnummer" placeholder="Flurnummer" name="flurnummer" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="year_of_construction">Baujahr</label>
						<input type="text" class="form-control" id="year_of_construction" placeholder="Baujahr" name="year_of_construction" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="year_of_last_renovation">Letzte Renovierung</label>
						<input type="text" class="form-control" id="year_of_last_renovation" placeholder="Letzte Renovierung" name="year_of_last_renovation" value="">
					</div>{{-- form-group --}}
				</div>{{-- /.card-body --}}
			</div>{{-- /.card --}}
		</div>{{-- /.col-md-6 --}}
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Abrechnungsdaten</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">
					<div class="form-group">
						<label for="ground_area">Grundfläche</label>
						<input type="text" class="form-control" id="ground_area" placeholder="Grundfläche" name="ground_area" value="">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="building_area">Gebäudefläche</label>
						<input type="text" class="form-control" id="building_area" placeholder="Gebäudefläche" name="building_area" value="">
					</div>{{-- form-group --}}
				</div><!-- /.card-body -->
			</div><!-- /.card -->
			<div class="card card">
				<div class="card-header">
					<h3 class="card-title">Dokumente</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Dateiname</th>
									<th>Dateigröße</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Energieausweis-10_12_2014.pdf</td>
									<td>44.9715 kb</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
											<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>{{-- /.table-responsive --}}
				</div> {{-- /.card-body --}}
			</div>{{-- /.card --}}
		</div>{{-- /.col-md-6 --}}
	</div>{{-- /.row --}}
</form>

<div class="row">
	<div class="col-12 mb-3">
		<button type="submit" class="btn btn-success float-right" form="createForm">Gebäude anlegen</button>
		<a class="btn btn-default float-right mr-3" href="{{ route('buildings.index') }}" role="button">Abbrechen</a>
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}
@stop
