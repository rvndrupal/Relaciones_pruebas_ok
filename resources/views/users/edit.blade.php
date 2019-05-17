@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Editar
                    <small>Al usuario</small>
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
                   usuario
                </div>

                <div class="panel-body">

                {!! Form::model($user, ['route'=> ['users.update', $user->id],
                 'method'=>'PUT']) !!}

                @include('users.partials.edit')

                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
