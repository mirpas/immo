@extends('adminlte::page')
@section('content_header')
<h1 class="m-0 text-dark">Neuen Vertrag anlegen</h1>
@stop
@section('content')
<div class="row">
	<div class="col-12">
		@include('layouts.errors')
	</div>{{-- /.col-12 --}}
</div>{{-- /.row --}}

<form method="POST" action="{{ route('contracts.store') }}" id="createForm">
	@method('POST')
	@include('contracts.form', [
			//'cardClass' => 'card-primary',
			//'submitButtonClass' => '',
			'submitButtonText' => 'Vertrag speichern',
			//'cancelButtonClass' => '',
			'cancelButtonText' => 'Abbrechen',
			//'deleteButton' => true,
			//'deleteButtonClass' => '',
			//'deleteButtonText' => '',
		])
</form>

@stop

@section('js')
	<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js">
	</script>
	<script>
	var canvas = document.getElementById("canvas")
	var parentWidth = $(canvas).parent().outerWidth();
	canvas.setAttribute("width", parentWidth);
	canvas.setAttribute("height", parentWidth*0.3);

	var signaturePad = new SignaturePad(canvas, {
		//backgroundColor: "rgba(50, 0, 0, 0.9)",
		penColor: "rgb(0, 0, 150)"
	});

	//console.log(signaturePad.toDataURL("image/png"));
	$("#createForm").submit(function() {
		$("#unterschrift").val(signaturePad.toDataURL("image/png"));
	});

	</script>
@stop
