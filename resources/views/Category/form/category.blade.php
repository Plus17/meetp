{{ csrf_field() }}
<div class="grupo">

    <div class="caja movil-1-3">

        <div class="form-group">
            {!! Form::label('name', 'Nombre de la Categoria') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

    </div>
    <div class="caja movil-1-3">

        <div class="btn-group">
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}

            {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
        </div>
    </div>

    <div class="caja movil-1-3">
        Tercera caja
    </div>

</div>
