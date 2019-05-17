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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar categoría
                </div>

                <div class="panel-body">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}

                        @include('categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
