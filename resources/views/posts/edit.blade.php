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
                    Editar entrada
                </div>

                <div class="panel-body">
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

                        @include('posts.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
