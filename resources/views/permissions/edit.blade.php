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
                    Editar Permiso
                </div>

                <div class="panel-body">
                    {!! Form::model($permiso, ['route' => ['permissions.update', $permiso->id], 'method' => 'PUT']) !!}

                        @include('permissions.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
