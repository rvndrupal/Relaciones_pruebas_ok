@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Mostrar
                    <small>Producto</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Productos</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    @can('products.index')
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary pull-right">Lista</a>
                    @endcan
                <div class="panel-heading">
                   Producto
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $product->name }}</p>
                <p> <strong>Descripción</strong> {{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
