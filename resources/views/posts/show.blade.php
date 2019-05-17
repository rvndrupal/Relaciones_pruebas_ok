@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Lista de Post
                    <small>Todos los Post</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('posts.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Post</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver entrada
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $post->name }}</p>
                    <p><strong>Slug</strong> {{ $post->slug }}</p>
                    <p><strong>Descripción</strong> {{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
