@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'MeetPlus - Perfil')

@section('content')

	<p>Admin Template</p>

	<article class="grupo">

		<div class="caja movil-1-3">
	    	<h2>Mis posts</h2>
	    	<a href="{{ route('user.events')  }}"><button type="button" class="btn btn-success">Posts</button></a>
	    </div>

	    <div class="caja movil-1-3">
	    	<h2>Mi perfil</h2>
	    	<a href="#"><button type="button" class="btn btn-success">Editar Perfil</button></a>
	    </div>

	    <div class="caja movil-1-3">
	    	<h2>Con un borde rojo</h2>
	    </div>

	<article>

@endsection

@section('js')
	@parent
@endsection
