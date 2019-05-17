@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Rol
                    <small>Permiso</small>
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
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Usuario
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $role->name }}</p>
                <p> <strong>Slug</strong> {{ $role->slug }}</p>
                <p> <strong>Descripción</strong> {{ $role->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
