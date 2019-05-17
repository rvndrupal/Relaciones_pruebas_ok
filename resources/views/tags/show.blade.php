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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver etiqueta
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $tag->name }}</p>
                    <p><strong>Slug</strong> {{ $tag->slug }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
