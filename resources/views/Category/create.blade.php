@extends('layout.master')


@section('title', 'Agregar categoria')

@section('content')

    @include('partials.errors');
    @include('partials.message');

    {!! Form::open(array('url' => '#')) !!}
        @include('Category.form.category')
    {!! Form::close() !!}

@endsection
