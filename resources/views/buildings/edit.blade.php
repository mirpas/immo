@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Gebäude bearbeiten</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('buildings.edit', $building->id) }}" id="editForm">
	@method('PATCH')
	@include('buildings.form', [
			'cardClass' => 'card-warning',
			'submitButtonClass' => 'btn-warning',
			'submitButtonText' => 'Änderungen speichern',
			//'cancelButtonClass' => '',
			'cancelButtonText' => 'Abbrechen',
			'deleteButton' => true,
			//'deleteButtonClass' => '',
			'deleteButtonText' => 'Gebäude löschen',
		])
</form>

<form method="POST" action="{{ route('buildings.destroy', $building->id) }}" id="deleteForm">
	@method('DELETE')
	@csrf
</form>

@stop
