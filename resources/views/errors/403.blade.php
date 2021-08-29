@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="text-center">
			<h2>Cette action n'est pas autorisée</h2>
			<a href="{{ url('articles') }}">Retour</a>
		</div>
	</div>
</div>
@endsection