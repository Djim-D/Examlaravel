@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3 mt-3"><a href="{{ route('referentiels.create') }}" class="btn btn-info">Cree un referentiel</a></div>

	<table class="table table-bordered">
		<thead>
			<div class="container text-center bg-success">
				<h1>LISTES DES REFERENTIELS</h1>
			</div>
			<tr>
				<th>Id</th>
				<th>Libelle</th>
				<th>Validated</th>
				<th>Horaire</th>
				<th>Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($referentiels as $referentiel)

				<tr>
					<td>{{ $referentiel->id }}</td>
					<td>{{ $referentiel->libelle }}</td>
					@if($referentiel->validated == 1)
						<td> Oui </td>
						@else
						<td> Non </td>
					@endif
					<td>{{ $referentiel->horaire }}</td>
					@foreach($types as $type)
					@if($type->id == $referentiel->type_id)
					<td>{{ $type->libelle}} </td>
					@endif
					@endforeach

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('referentiels.edit', [$referentiel->id]) }}" class="btn btn-primary">Modify</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['referentiels.destroy', $referentiel->id]]) !!}
                                {!! Form::submit('DELETE', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
