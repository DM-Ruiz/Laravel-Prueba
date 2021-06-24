@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'PRODUCTO DEL ORITUCO' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">PRODUCTO DEL ORITUCO</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> PRODUCTOS</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $producto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $producto->existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Poseeiva:</strong>
                            {{ $producto->poseeiva }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
