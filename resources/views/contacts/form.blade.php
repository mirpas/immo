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
					<label for="ident">Name</label>
					<input
						type="text"
						class="form-control @error('ident') is-invalid @enderror"
						id="ident"
						placeholder="Kurzbezeichnung"
						name="ident"
						value="">
				</div>{{-- form-group --}}

			</div>{{-- /.card-body --}}
		</div>{{-- /.card --}}

	</div>{{-- /.col-md-6 --}}
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Title 2</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
				</div>{{-- /.card-tools --}}
			</div>{{-- /.card-header --}}
			<div class="card-body">

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
