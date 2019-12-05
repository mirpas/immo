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
	@include('flats.form', [
			'cardClass' => 'card-warning',
			'submitButtonClass' => 'btn-warning',
			'submitButtonText' => 'Änderungen speichern',
			//'cancelButtonClass' => '',
			'cancelButtonText' => 'Abbrechen',
			'deleteButton' => true,
			//'deleteButtonClass' => '',
			'deleteButtonText' => 'Mieteinheit löschen',
		])
</form>

<form method="POST" action="{{ route('flats.destroy', $flat->id) }}" id="deleteForm">
	@method('DELETE')
	@csrf
</form>

@stop
