@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de todo los Permisos
                    <small>Todos los permisos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('permissions.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Permisos</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Permisos
                    <a href="{{ route('permissions.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permisos as $permiso)
                            <tr>
                                <td>{{ $permiso->id }}</td>
                                <td>{{ $permiso->name }}</td>
                                <td>{{ $permiso->slug }}</td>

                                <td width="10px">
                                    <a href="{{ route('permissions.edit', $permiso->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['permissions.destroy', $permiso->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $permisos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
