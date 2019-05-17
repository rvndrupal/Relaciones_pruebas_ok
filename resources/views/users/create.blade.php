@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Usuarios
                    <small>Todos los Usuarios </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Usuarios</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear nuevo Usuario
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
