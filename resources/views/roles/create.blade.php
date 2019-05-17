@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Nuevo.
                    <small>Rol y Permiso</small>
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
                   Nuevo Rol
                </div>

                <div class="panel-body">

                {!! Form::open(['route'=> 'roles.store']) !!}

                @include('roles.partials.form')

                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
