@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Categorias
                    <small>Todos las Categorias</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Categorias</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver categoría
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $category->name }}</p>
                    <p><strong>Slug</strong> {{ $category->slug }}</p>
                    <p><strong>Descripción</strong> {{ $category->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
