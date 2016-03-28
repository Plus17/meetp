@extends('layout.master')

@section('title', 'Crear Evento')

@section('content')

    @include('partials.errors');
    @include('partials.message');

    {!! Form::open(array('url' => '#')) !!}
        @include('Event.form.event')
    {!! Form::close() !!}

@endsection
