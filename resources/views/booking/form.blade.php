<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('clientes_id') }}
            {{ Form::text('clientes_id', $bookings->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes Id']) }}
            {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habitacion') }}
            {{ Form::text('habitacion', $bookings->habitacion, ['class' => 'form-control' . ($errors->has('habitacion') ? ' is-invalid' : ''), 'placeholder' => 'Habitacion']) }}
            {!! $errors->first('habitacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ocupacion') }}
            {{ Form::text('ocupacion', $bookings->ocupacion, ['class' => 'form-control' . ($errors->has('ocupacion') ? ' is-invalid' : ''), 'placeholder' => 'Ocupacion']) }}
            {!! $errors->first('ocupacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrada') }}
            {{ Form::text('entrada', $bookings->entrada, ['class' => 'form-control' . ($errors->has('entrada') ? ' is-invalid' : ''), 'placeholder' => 'Entrada']) }}
            {!! $errors->first('entrada', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::text('salida', $bookings->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida']) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>