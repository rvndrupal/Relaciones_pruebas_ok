@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Productos
                    <small>Todos los Productos</small>
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
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Productos
                    @can('products.create')
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $producto )
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->name }}</td>
                                <td width="10px">
                                @can('products.show')
                                    <a href="{{ route('products.show', $producto->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('products.edit')
                                    <a href="{{ route('products.edit', $producto->id) }}" class="btn btn-sm btn-dark">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('products.destroy')

                                {!! Form::open(['route'=>['products.destroy', $producto->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>

                                {!! Form::close() !!}

                                @endcan
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->render() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
