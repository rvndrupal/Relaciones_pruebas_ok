@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Usuarios
                    <small>Todos los Usuarios</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">User</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios
                    <a href="{{ route('users.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>

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
                            @foreach ($users as $user )
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td width="10px">
                                @can('users.show')
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('users.destroy')

                                {!! Form::open(['route'=>['users.destroy', $user->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>

                                {!! Form::close() !!}

                                @endcan
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    {{ $users->render() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
