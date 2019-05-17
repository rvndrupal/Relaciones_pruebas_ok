@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Editar.
                    <small>Rol</small>
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
                   Editar Roles
                </div>

                <div class="panel-body">

                {!! Form::model($role, ['route'=> ['roles.update', $role->id],
                 'method'=>'PUT']) !!}

                @include('roles.partials.form')

                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
