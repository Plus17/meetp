@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'Editar Evento')

@section('content')

    @include('partials.errors');
    @include('partials.message');

    @if($event)
        {!!  Form::model($event, array('route' => ['event.update', $event->id]) ) !!}
            @include('Event.form.event')
        {!! Form::close() !!}
    @endif
@endsection

@section('js')
	@parent
@endsection
