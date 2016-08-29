@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'Categorias')

@section('content')

    @include('partials.errors');
    @include('partials.message');

    <div class="grupo">
        <div class="caja total">

            <p>
            Categorias existentes, se pueden agregar nuevas categorias:
            <a href="{{ route('category.create') }}" class="btn btn-info">Crear <span class="glyphicon glyphicon-new-window"></span></a>
            </p>
            @if($categories)
                @foreach($categories as $category)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $category->name }}</td>

                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                                        <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @endif
            {!! $categories->render() !!}
        </div>
    </div>

@endsection

@section('js')
	@parent
@endsection
