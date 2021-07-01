@extends('layouts.app')

@section('template_title')
    {{ $booking->name ?? 'Show Booking' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Booking</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $booking->clientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Habitacion:</strong>
                            {{ $booking->habitacion }}
                        </div>
                        <div class="form-group">
                            <strong>Ocupacion:</strong>
                            {{ $booking->ocupacion }}
                        </div>
                        <div class="form-group">
                            <strong>Entrada:</strong>
                            {{ $booking->entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $booking->salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
