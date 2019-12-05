@csrf
<div class="row">
	<div class="col-md-6">
		<div class="card {{ $cardClass ?? 'card-primary' }}">
			<div class="card-header">
				<h3 class="card-title">Basic</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
				</div>{{-- /.card-tools --}}
			</div>{{-- /.card-header --}}
			<div class="card-body">
				<div class="form-group">
					<label for="short_name">Kurzbezeichnung</label>
					<input
						type="text"
						class="form-control @error('short_name') is-invalid @enderror"
						id="short_name"
						placeholder="Kurzbezeichnung"
						name="short_name"
						value="{{ old('short_name', $building->short_name ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="description">Bezeichnung</label>
					<input
						type="text"
						class="form-control @error('description') is-invalid @enderror"
						id="description"
						placeholder="Bezeichnung"
						name="description"
						value="{{ old('description', $building->description ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="street">Straße</label>
					<input
						type="text"
						class="form-control @error('street') is-invalid @enderror"
						id="street"
						placeholder="Straße"
						name="street"
						value="{{ old('street', $building->street ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="zip">PLZ</label>
					<input
						type="text"
						class="form-control @error('zip') is-invalid @enderror"
						id="zip"
						placeholder="PLZ"
						name="zip"
						value="{{ old('zip', $building->zip ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="city">Stadt</label>
					<input
						type="text"
						class="form-control @error('city') is-invalid @enderror"
						id="city"
						placeholder="Stadt"
						name="city"
						value="{{ old('city', $building->city ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="flurnummer">Flurnummer</label>
					<input
						type="text"
						class="form-control @error('flurnummer') is-invalid @enderror"
						id="flurnummer"
						placeholder="Flurnummer"
						name="flurnummer"
						value="{{ old('flurnummer', $building->flurnummer ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="year_of_construction">Baujahr</label>
					<input
						type="text"
						class="form-control @error('year_of_construction') is-invalid @enderror"
						id="year_of_construction"
						placeholder="Baujahr"
						name="year_of_construction"
						value="{{ old('year_of_construction', $building->year_of_construction ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="year_of_last_renovation">Letzte Renovierung</label>
					<input
						type="text"
						class="form-control @error('year_of_last_renovation') is-invalid @enderror"
						id="year_of_last_renovation"
						placeholder="Letzte Renovierung"
						name="year_of_last_renovation"
						value="{{ old('year_of_last_renovation', $building->year_of_last_renovation ?? '') }}">
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
					<input
						type="text"
						class="form-control @error('ground_area') is-invalid @enderror"
						id="ground_area"
						placeholder="Grundfläche"
						name="ground_area"
						value="{{ old('ground_area', $building->ground_area ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="building_area">Gebäudefläche</label>
					<input
						type="text"
						class="form-control @error('building_area') is-invalid @enderror"
						id="building_area"
						placeholder="Gebäudefläche"
						name="building_area"
						value="{{ old('building_area', $building->building_area ?? '') }}">
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

<div class="row">
	<div class="col-12 mb-3">
		<button type="submit" class="btn {{ $submitButtonClass ?? 'btn-primary' }} float-right" form="createForm">{{ $submitButtonText ?? 'submit' }}</button>
		<a class="btn {{ $cancelButtonClass ?? 'btn-default' }} float-right mr-3" href="{{ url()->previous() }}" role="button">{{ $cancelButtonText ?? 'cancel' }}</a>
		@if($deleteButton ?? false)
		<button type="submit" class="btn {{ $deleteButtonClass ?? 'btn-danger' }}" form="deleteForm">{{ $deleteButtonText ?? 'delete' }}</button>
		@endif
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}
