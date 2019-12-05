@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Neuen Zähler anlegen</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('meters.store') }}" id="createForm">
	@method('POST')
	@include('meters.form', [
			//'cardClass' => 'card-primary',
			//'submitButtonClass' => '',
			'submitButtonText' => 'Zähler speichern',
			//'cancelButtonClass' => '',
			'cancelButtonText' => 'Abbrechen',
			//'deleteButton' => true,
			//'deleteButtonClass' => '',
			//'deleteButtonText' => '',
		])
</form>

@stop
