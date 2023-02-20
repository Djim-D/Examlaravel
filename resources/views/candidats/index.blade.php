@extends('default')

@section('content')

	<div class="d-flex justify-content-begin mb-3 mt-3"><a href="{{ route('candidats.create') }}" class="btn btn-info">Ajouter</a></div>

	<table class="table table-bordered">
		<thead>
			<div class="container text-center ">
				<h1>CANDIDATS</h1>
			</div>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Age</th>
				<th>Email</th>
				<th>NiveauEtude</th>
				<th>Formation</th>
				<th>Sexe</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($candidats as $candidat)

				<tr>
					<td>{{ $candidat->id }}</td>
					<td>{{ $candidat->nom }}</td>
					<td>{{ $candidat->prenom }}</td>
					<td>{{ $candidat->age }}</td>
					<td>{{ $candidat->email }}</td>
					<td>{{ $candidat->niveauEtude }}</td>
					<td>{{ $candidat->formation_id}}</td>
					<td>{{ $candidat->sexe }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('candidats.edit', [$candidat->id]) }}" class="btn btn-primary">Modify</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['candidats.destroy', $candidat->id]]) !!}
                                {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
