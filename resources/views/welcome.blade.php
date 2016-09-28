@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'MeetPlus')

@section('content')

		<div class="row">
			<section class="posts col-md-9">
				<div class="miga-de-pan">
					<ol class="breadcrumb">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Categorias</a></li>
						<li class="active">Diseño Web</li>
					</ol>
				</div>
                <h2>Eventos</h2>

                    @if(! $events->isEmpty())
                        @foreach($events as $event)
                            <article class="post clearfix">
                                <a href="#" class="thumb pull-left">
            						<img class="img-thumbnail" src="{{url('assets/img/img1.jpg')}}" alt="">
            					</a>
                                <h3 class="post-title">
            						<a href="#">{{ $event->name }}</a>
            					</h3>
                                <p><span class="post-fecha">{{ $event->created_at->toFormattedDateString() }}</span> En <span class="post-autor">{{ $event->place }}</span> por <span class="post-autor"><a href="#">{{ $event->user->name }}</a></span></p>
                            <li>
                                <p class="post-contenido text-justify">
            						{{ $event->description }}
            					</p

            					<div class="contenedor-botones">

									{!! link_to_route('welcome.event.show', $title = 'Leer Mas', $parameters = $event->id, $attributes = ['class' => 'btn btn-primary'] ) !!}
            						<a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
            					</div>
                            </article>
                        @endforeach
                    @else
                        <p>No hay eventos para mostrar</p>
                    @endif

				<nav>
					<div class="center-block">
						<ul class="pagination">
							{!! $events->render() !!}
						</ul>
					</div>
				</nav>

@endsection

@section('js')
	@parent
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Typist/1.2/typist.min.js"></script>
	<script>
		var typist;

		typist = document.querySelector("#typist-element");

		new Typist(typist, {
			letterInterval: 60,
			textInterval: 3000
		});
	</script>
@endsection
