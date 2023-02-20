@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($type, array('route' => array('types.update', $type->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('libelle', 'Libelle', ['class'=>'form-label']) }}
			{{ Form::text('libelle', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
