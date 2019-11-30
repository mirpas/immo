@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Mieteinheit bearbeiten</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('flats.update', $flat->id) }}" id="createForm">
	@method('PATCH')
	@csrf
	<div class="row">
		<div class="col-md-6">
			<div class="card card-warning">
				<div class="card-header">
					<h3 class="card-title">Basic</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">
					<div class="form-group">
						<label for="building_id">Gebäude</label>
						<select class="custom-select @error('building_id') is-invalid @enderror" id="building_id" name="building_id">
                          @foreach($buildings as $building)
                          	<option value="{{ $building->id }}" {{ old('building_id', $flat->building->id) == $building->id ? 'selected' : ''}}>{{ $building->short_name }}</option>
                          @endforeach
                        </select>
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="short_name">Kurzbezeichnung</label>
						<input type="text" class="form-control @error('short_name') is-invalid @enderror" id="short_name" placeholder="Kurzbezeichnung" name="short_name" value="{{ old('short_name', $flat->short_name) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="description">Bezeichnung</label>
						<input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Bezeichnung" name="description" value="{{ old('description', $flat->description) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="flat_type_id">Typ</label>
						<select class="custom-select @error('flat_type_id') is-invalid @enderror" id="flat_type_id" name="flat_type_id">
                          @foreach($flatTypes as $flatType)
                          	<option value="{{ $flatType->id }}" {{ old('flat_type_id', $flat->flatType->id) == $flatType->id ? 'selected' : ''}}>{{ $flatType->description }}</option>
                          @endforeach
                        </select>
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="floor">Stockwerk</label>
						<input type="text" class="form-control @error('floor') is-invalid @enderror" id="floor" placeholder="Stockwerk" name="floor" value="{{ old('floor', $flat->floor) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="no_of_rooms">Anzahl der Räume</label>
						<input type="text" class="form-control @error('no_of_rooms') is-invalid @enderror" id="no_of_rooms" placeholder="Anzahl der Räume" name="no_of_rooms" value="{{ old('no_of_rooms', $flat->no_of_rooms) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="year_of_last_renovation">Letzte Renovierung</label>
						<input type="text" class="form-control @error('year_of_last_renovation') is-invalid @enderror" id="year_of_last_renovation" placeholder="Letzte Renovierung" name="year_of_last_renovation" value="{{ old('year_of_last_renovation', $flat->year_of_last_renovation) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="built_in_kitchen" name="built_in_kitchen" value="1">
							<label class="custom-control-label" for="built_in_kitchen">Einbauküche vorhanden</label>
                    	</div>{{-- custom-control --}}
                  	</div>{{-- form-group --}}
				</div>{{-- /.card-body --}}
			</div>{{-- /.card --}}
			<div class="card collapsed-card">
				<div class="card-header">
					<h3 class="card-title">WEG</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-plus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">
					<div class="form-group">
						<label for="weg_mieteigentumsanteil">Mieteigentumsanteil</label>
						<input type="text" class="form-control @error('weg_mieteigentumsanteil') is-invalid @enderror" id="weg_mieteigentumsanteil" placeholder="Mieteigentumsanteil" name="weg_mieteigentumsanteil" value="{{ old('weg_mieteigentumsanteil', $flat->weg_mieteigentumsanteil) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="weg_kopfstimmen">Kopfstimmen</label>
						<input type="text" class="form-control @error('weg_kopfstimmen') is-invalid @enderror" id="weg_kopfstimmen" placeholder="Kopfstimmen" name="weg_kopfstimmen" value="{{ old('weg_kopfstimmen', $flat->weg_kopfstimmen) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="weg_hausgeld">Hausgeld</label>
						<input type="text" class="form-control @error('weg_hausgeld') is-invalid @enderror" id="weg_hausgeld" placeholder="Hausgeld" name="weg_hausgeld" value="{{ old('weg_hausgeld', $flat->weg_hausgeld) }}">
					</div>{{-- form-group --}}
				</div><!-- /.card-body -->
			</div><!-- /.card -->
		</div>{{-- /.col-md-6 --}}
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Flächen und Abrechnung</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">
					<div class="form-group">
						<label for="din_area">DIN-Fläche</label>
						<input type="text" class="form-control @error('din_area') is-invalid @enderror" id="din_area" placeholder="DIN-Fläche" name="din_area" value="{{ old('din_area', $flat->din_area) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="living_area">Wohnfläche</label>
						<input type="text" class="form-control @error('living_area') is-invalid @enderror" id="living_area" placeholder="Wohnfläche" name="living_area" value="{{ old('living_area', $flat->living_area) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="heated_area">Heizfläche</label>
						<input type="text" class="form-control @error('heated_area') is-invalid @enderror" id="heated_area" placeholder="Heizfläche" name="heated_area" value="{{ old('heated_area', $flat->heated_area) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="useable_area">Nutzfläche</label>
						<input type="text" class="form-control @error('useable_area') is-invalid @enderror" id="useable_area" placeholder="Nutzfläche" name="useable_area" value="{{ old('useable_area', $flat->useable_area) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="balcony_area">Balkonfläche</label>
						<input type="text" class="form-control @error('balcony_area') is-invalid @enderror" id="balcony_area" placeholder="Balkonfläche" name="balcony_area" value="{{ old('balcony_area', $flat->balcony_area) }}">
					</div>{{-- form-group --}}
				</div><!-- /.card-body -->
			</div><!-- /.card -->
			<div class="card">
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
		<button type="submit" class="btn btn-warning float-right" form="createForm">Änderungen speichern</button>
		<a class="btn btn-default float-right mr-3" href="{{ route('flats.index') }}" role="button">Abbrechen</a>
		<form method="POST" action="{{ route('flats.destroy', $flat->id) }}" id="deleteForm">
			@method('DELETE')
			@csrf
			<button type="submit" class="btn btn-danger">Mieteinheit löschen</button>
		</form>
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}
@stop
