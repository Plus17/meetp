@extends('layout.master')

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
