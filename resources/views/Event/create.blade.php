@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'Crear Evento')

@section('content')

    @include('partials.errors');
    @include('partials.message');

    {!! Form::open(array('url' => '#')) !!}
        @include('Event.form.event')
    {!! Form::close() !!}

@endsection

@section('js')
	@parent
@endsection
