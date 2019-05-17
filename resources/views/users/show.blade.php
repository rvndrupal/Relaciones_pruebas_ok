@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Usuario
                    <small>Datos del Usuario</small>
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
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Usuario
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $user->name }}</p>
                <p> <strong>Email</strong> {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
