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
					<label for="meter_type_id">Zählertyp</label>
					<select
						class="custom-select @error('meter_type_id') is-invalid @enderror"
						id="meter_type_id"
						name="meter_type_id">
                      @foreach($meterTypes as $meterType)
                      	<option
                      		value="{{ $meterType->id }}" {{ old('meter_type_id', $meter->meter_type_id ?? '') == $meterType->id ? 'selected' : ''}}>{{ $meterType->description }}
                      	</option>
                      @endforeach
                    </select>
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="ident">Ident-Nr.</label>
					<input
						type="text"
						class="form-control @error('ident') is-invalid @enderror"
						id="ident"
						placeholder="Kurzbezeichnung"
						name="ident"
						value="{{ old('ident', $meter->ident ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="unit">Einheit</label>
					<input
						type="text"
						class="form-control @error('unit') is-invalid @enderror"
						id="unit"
						placeholder="Einheit"
						name="unit"
						value="{{ old('unit', $meter->unit ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="info">Info</label>
					<input
						type="text"
						class="form-control @error('info') is-invalid @enderror"
						id="info"
						placeholder="Info"
						name="info"
						value="{{ old('info', $meter->info ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="geeicht_am">Eichdatum</label>
					<input
						type="text"
						class="form-control @error('geeicht_am') is-invalid @enderror"
						id="geeicht_am"
						placeholder="Eichdatum (yyyy-mm-dd)"
						name="geeicht_am"
						value="{{ old('geeicht_am', $meter->geeicht_am ?? '') }}">
				</div>{{-- form-group --}}
			</div>{{-- /.card-body --}}
		</div>{{-- /.card --}}

	</div>{{-- /.col-md-6 --}}
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Einheit zuordnen</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
				</div>{{-- /.card-tools --}}
			</div>{{-- /.card-header --}}
			<div class="card-body">
				<div class="form-group">
					@foreach($flats as $flat)
						<div class="form-check">
                          <input
                          	class="form-check-input"
                          	type="checkbox"
                          	value="{{ $flat->id }}"
                          	name="flats[]"
                          	{{ ( $meter->flats ?? collect(old('flats')) )->contains($flat->id) ? 'checked' : '' }}>
                          <label class="form-check-label">{{ $flat->short_name . ' (' . $flat->building->short_name . ')' }}</label>
                        </div>{{-- /.form-check --}}
					@endforeach
                </div>{{-- /.form-group --}}
			</div><!-- /.card-body -->
		</div><!-- /.card -->
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
