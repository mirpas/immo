@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Vertrag bearbeiten</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('contracts.update', $contract->id) }}" id="createForm">
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
						<label for="flat_id">Mieteinheit</label>
						<select class="custom-select @error('flat_id') is-invalid @enderror" id="flat_id" name="flat_id">
                          @foreach($flats as $flat)
                          	<option value="{{ $flat->id }}" {{ old('flat_id', $contract->flat->id) == $flat->id ? 'selected' : '' }}>{{ $flat->short_name . ' (' . $flat->building->short_name . ')' }}</option>
                          @endforeach
                        </select>
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="start_date">Vertragsstart</label>
						<input type="text" class="form-control @error('start_date') is-invalid @enderror" id="start_date" placeholder="Vertragsstart" name="start_date" value="{{ old('start_date', $contract->start_date) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="end_date">Vertragsende</label>
						<input type="text" class="form-control @error('end_date') is-invalid @enderror" id="end_date" placeholder="Vertragsende" name="end_date" value="{{ old('end_date', $contract->end_date) }}">
					</div>{{-- form-group --}}
					<div class="form-group">
						<label for="notice_period">Kündigungsfrist</label>
						<input type="text" class="form-control @error('notice_period') is-invalid @enderror" id="notice_period" placeholder="Vertragsende" name="notice_period" value="{{ old('notice_period', $contract->notice_period) }}">
					</div>{{-- form-group --}}
				</div>{{-- /.card-body --}}
			</div>{{-- /.card --}}

		</div>{{-- /.col-md-6 --}}
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Mieter zuordnen</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">

				</div><!-- /.card-body -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Unterschrift</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
					</div>{{-- /.card-tools --}}
				</div>{{-- /.card-header --}}
				<div class="card-body">
					<div class="form-group">
						<img src="{{ $contract->unterschrift }}" alt="unterschrift">
					</div>{{-- /.form-group --}}
				</div><!-- /.card-body -->
			</div><!-- /.card -->
		</div>{{-- /.col-md-6 --}}
	</div>{{-- /.row --}}
</form>

<div class="row">
	<div class="col-12 mb-3">
		<button type="submit" class="btn btn-warning float-right" form="createForm">Änderungen speichern</button>
		<a class="btn btn-unitault float-right mr-3" href="{{ route('contracts.index') }}" role="button">Abbrechen</a>
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}
@stop
