@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Tags
                    <small>Todos los Tags</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('tags.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Tags</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear etiqueta
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'tags.store']) !!}

                        @include('tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
