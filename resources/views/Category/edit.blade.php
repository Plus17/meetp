@extends('layout.master')

@section('css')
	@parent
@endsection

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

@section('js')
	@parent
@endsection
