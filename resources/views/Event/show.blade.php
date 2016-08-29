@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'Evento - '.$event->name)

@section('content')

    @if(!empty($event))
        <article class="post clearfix">

        <div class="grupo">
            <div class="caja total">
                <p> <h2 >{{ $event->name }}</h2></p>
            </div>
            <div class="caja base-100 movil-100 tablet-30 web-30">
                <img class="img-thumbnail centro" src="{{url('assets/img/img1.jpg')}}" alt="">
            </div>

            <div class="caja base-100 movil-100 tablet-70 web-70">
                <p class="post-title">Detalles del evento:</p>
                <p><span class="post-fecha">{{ $event->created_at->toFormattedDateString() }}</span> En <span class="post-autor">{{ $event->place }}</span> por <span class="post-autor"><a href="#">{{ $event->user->name }}</a></span></p>

                <p class="post-contenido text-justify">
                    {{ $event->description }}
                    Ut varius nulla at nisi accumsan tempor. Nullam sed elit vehicula, viverra leo at, consequat diam.
                    Nulla varius sapien et purus imperdiet facilisis. Mauris aliquam libero et auctor dapibus. Sed ac
                    est efficitur, tempus leo eget, bibendum quam. Donec pharetra, dui eu viverra finibus, neque dolor
                    accumsan diam, sit amet varius orci arcu et nibh. Ut sodales lobortis eros. Pellentesque nec
                    sollicitudin turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <ul>
                    <li>Inicia: {{ $event->start }}</li>
                    <li>Termino: {{ $event->end }}</li>
                    <li>Lugar: {{ $event->place }}</li>
                </ul>

            </div>
        </div>

        </article>

    @else
        <p>
            No existe el evento
        </p>
    @endif
    <div class="grupo">
        <div class="caja total">
            <div class="jumbotron">
                <h3>Caja de comentarios</h3>
            </div>
        </div>
            <div class="caja movil-20">
                <img src="{{url('assets/img/img1.jpg')}}" alt="">
            </div>
            <div class="caja movil-80">
                <p>
                    Soy un comentario Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis sem
                    eu maximus accumsan. In vehicula et quam vitae aliquam. Aliquam erat volutpat. Nullam tempus tellus
                    augue, vitae tempor justo aliquam eget. Morbi imperdiet metus in quam suscipit pellentesque.
                    Integer ut nunc eget tellus dapibus posuere. Praesent sollicitudin sem non metus mattis sodales.
                    Nunc semper interdum urna, in porttitor dolor. Nullam imperdiet nisl magna, et auctor diam fermentum et.
                </p>


                <div class="datos comentario">
                    <p>Autor: Soy el autor - Publicado el: fecha</p>
                </div>
            </div>

    </div>

@endsection

@section('js')
	@parent
@endsection
