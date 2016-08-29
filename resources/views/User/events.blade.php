@extends('layout.master')

@section('css')
	@parent
@endsection

@section('title', 'Mis eventos')

@section('content')

    <div class="grupo">
        <div class="caja total">

            <p>
            Esto son todos los eventos que haz registrado, puedes verlos en detalle, editarlos o
            siempre puedes crear uno nuevo:
            <a href="{{ route('event.create') }}" class="btn btn-info">Crear <span class="glyphicon glyphicon-new-window"></span></a>
            </p>

            @if(count($events)>0)
                @foreach($events as $event)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Lugar</th>
                                    <th>Categoria</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $event->name }}</td>
                                    <td>0000-00-00</td>
                                    <td>{{ $event->place }}</td>
                                    <td>{{ $event->category->name }}</td>
                                    <td>
                                        <a href="{{ route('welcome.event.show', $event->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-floppy-open"></span></a>
                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                                        <a href="{{ route('event.destroy', $event->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @else
                <p>No hay eventos que mostrar</p>
            @endif
            {!! $events->render() !!}
        </div>
    </div>
@endsection

@section('js')
	@parent
@endsection
