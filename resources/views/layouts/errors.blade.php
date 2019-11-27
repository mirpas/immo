@if(count($errors))

<div class="alert alert-danger">
    <h5><i class="icon fas fa-exclamation-triangle"></i> Fehlermeldungen</h5>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<hr>

@endif
