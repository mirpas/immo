@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Kontakt bearbeiten</h1>
@stop
@section('content')

<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('contacts.update', $contact->id) }}" id="createForm">
	@method('PATCH')
	@include('contacts.form', [
			'cardClass' => 'card-warning',
			'submitButtonClass' => 'btn-warning',
			'submitButtonText' => 'Änderungen speichern',
			//'cancelButtonClass' => '',
			'cancelButtonText' => 'Abbrechen',
			'deleteButton' => true,
			//'deleteButtonClass' => '',
			'deleteButtonText' => 'Kontakt löschen',
		])
</form>

<form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" id="deleteForm">
	@method('DELETE')
	@csrf
</form>

@stop
