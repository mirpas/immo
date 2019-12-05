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
					<label for="prename">prename</label>
					<input
						type="text"
						class="form-control @error('prename') is-invalid @enderror"
						id="prename"
						placeholder="prename"
						name="prename"
						value="{{ old('prename', $contact->prename ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="surname">surname</label>
					<input
						type="text"
						class="form-control @error('surname') is-invalid @enderror"
						id="surname"
						placeholder="surname"
						name="surname"
						value="{{ old('surname', $contact->surname ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="birth_name">birth_name</label>
					<input
						type="text"
						class="form-control @error('birth_name') is-invalid @enderror"
						id="birth_name"
						placeholder="birth_name"
						name="birth_name"
						value="{{ old('birth_name', $contact->birth_name ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="gender">gender</label>
					<input
						type="text"
						class="form-control @error('gender') is-invalid @enderror"
						id="gender"
						placeholder="gender"
						name="gender"
						value="{{ old('gender', $contact->gender ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="nationality">nationality</label>
					<input
						type="text"
						class="form-control @error('nationality') is-invalid @enderror"
						id="nationality"
						placeholder="nationality"
						name="nationality"
						value="{{ old('nationality', $contact->nationality ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="day_of_birth">day_of_birth</label>
					<input
						type="text"
						class="form-control @error('day_of_birth') is-invalid @enderror"
						id="day_of_birth"
						placeholder="day_of_birth"
						name="day_of_birth"
						value="{{ old('day_of_birth', $contact->day_of_birth ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="street">street</label>
					<input
						type="text"
						class="form-control @error('street') is-invalid @enderror"
						id="street"
						placeholder="street"
						name="street"
						value="{{ old('street', $contact->street ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="street_extra">street_extra</label>
					<input
						type="text"
						class="form-control @error('street_extra') is-invalid @enderror"
						id="street_extra"
						placeholder="street_extra"
						name="street_extra"
						value="{{ old('street_extra', $contact->street_extra ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="zip">zip</label>
					<input
						type="text"
						class="form-control @error('zip') is-invalid @enderror"
						id="zip"
						placeholder="zip"
						name="zip"
						value="{{ old('zip', $contact->zip ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="city">city</label>
					<input
						type="text"
						class="form-control @error('city') is-invalid @enderror"
						id="city"
						placeholder="city"
						name="city"
						value="{{ old('city', $contact->city ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="country">country</label>
					<input
						type="text"
						class="form-control @error('country') is-invalid @enderror"
						id="country"
						placeholder="country"
						name="country"
						value="{{ old('country', $contact->country ?? '') }}">
				</div>{{-- form-group --}}
			</div>{{-- /.card-body --}}
		</div>{{-- /.card --}}
	</div>{{-- /.col-md-6 --}}
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Kontakt</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
				</div>{{-- /.card-tools --}}
			</div>{{-- /.card-header --}}
			<div class="card-body">
				<div class="form-group">
					<label for="phone">phone</label>
					<input
						type="text"
						class="form-control @error('phone') is-invalid @enderror"
						id="phone"
						placeholder="phone"
						name="phone"
						value="{{ old('phone', $contact->phone ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="mobile">mobile</label>
					<input
						type="text"
						class="form-control @error('mobile') is-invalid @enderror"
						id="mobile"
						placeholder="mobile"
						name="mobile"
						value="{{ old('mobile', $contact->mobile ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="email">email</label>
					<input
						type="text"
						class="form-control @error('email') is-invalid @enderror"
						id="email"
						placeholder="email"
						name="email"
						value="{{ old('email', $contact->email ?? '') }}">
				</div>{{-- form-group --}}
			</div><!-- /.card-body -->
		</div><!-- /.card -->
		<div class="card collapsed-card">
			<div class="card-header">
				<h3 class="card-title">Bank</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-plus"></i></button>
				</div>{{-- /.card-tools --}}
			</div>{{-- /.card-header --}}
			<div class="card-body">
				<div class="form-group">
					<label for="iban">iban</label>
					<input
						type="text"
						class="form-control @error('iban') is-invalid @enderror"
						id="iban"
						placeholder="iban"
						name="iban"
						value="{{ old('iban', $contact->iban ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="bic">bic</label>
					<input
						type="text"
						class="form-control @error('bic') is-invalid @enderror"
						id="bic"
						placeholder="bic"
						name="bic"
						value="{{ old('bic', $contact->bic ?? '') }}">
				</div>{{-- form-group --}}
			</div><!-- /.card-body -->
		</div><!-- /.card -->
		<div class="card collapsed-card">
			<div class="card-header">
				<h3 class="card-title">Firma</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-plus"></i></button>
				</div>{{-- /.card-tools --}}
			</div>{{-- /.card-header --}}
			<div class="card-body">
				<div class="form-group">
					<label for="company">company</label>
					<input
						type="text"
						class="form-control @error('company') is-invalid @enderror"
						id="company"
						placeholder="company"
						name="company"
						value="{{ old('company', $contact->company ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="company_extra">company_extra</label>
					<input
						type="text"
						class="form-control @error('company_extra') is-invalid @enderror"
						id="company_extra"
						placeholder="company_extra"
						name="company_extra"
						value="{{ old('company_extra', $contact->company_extra ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="company_ceo">company_ceo</label>
					<input
						type="text"
						class="form-control @error('company_ceo') is-invalid @enderror"
						id="company_ceo"
						placeholder="company_ceo"
						name="company_ceo"
						value="{{ old('company_ceo', $contact->company_ceo ?? '') }}">
				</div>{{-- form-group --}}
				<div class="form-group">
					<label for="tax_id">tax_id</label>
					<input
						type="text"
						class="form-control @error('tax_id') is-invalid @enderror"
						id="tax_id"
						placeholder="tax_id"
						name="tax_id"
						value="{{ old('tax_id', $contact->tax_id ?? '') }}">
				</div>{{-- form-group --}}
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
