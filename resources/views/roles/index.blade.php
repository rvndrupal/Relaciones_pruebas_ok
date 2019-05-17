@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Roles y Permisos.
                    <small>Sistema de Administración de Roles y Permisos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i>Roles</a></li>
                    <li class="active">Permisos</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Roles
                    @can('products.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Role</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role )
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td width="10px">
                                @can('roles.show')
                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('roles.edit')
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('roles.destroy')

                                {!! Form::open(['route'=>['roles.destroy', $role->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>

                                {!! Form::close() !!}

                                @endcan
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    {{ $roles->render() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
