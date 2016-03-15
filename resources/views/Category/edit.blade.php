@extends('layout.master')

@section('title', 'Agregar categoria')

@section('content')

    @include('partials.errors');
    @include('partials.message');

    @if($category)
        {!! Form::model($category, array('route' => ['category.update', $category->id]) ) !!}
            @include('Category.form.category')
        {!! Form::close() !!}
    @endif
@endsection
