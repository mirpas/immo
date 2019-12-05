@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Neue Mieteinheit anlegen</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('flats.store') }}" id="createForm">
	@method('POST')
	@include('flats.form', [
			//'cardClass' => 'card-primary',
			//'submitButtonClass' => '',
			'submitButtonText' => 'Mieteinheit speichern',
			//'cancelButtonClass' => '',
			'cancelButtonText' => 'Abbrechen',
			//'deleteButton' => true,
			//'deleteButtonClass' => '',
			//'deleteButtonText' => '',
		])
</form>

@stop
