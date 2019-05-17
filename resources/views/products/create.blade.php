{{--  @extends('layouts.app')  --}}
@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Nuevo
                    <small>Producto</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">Productos</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Producto
                </div>

                <div class="panel-body">

                {!! Form::open(['route'=> 'products.store']) !!}

                @include('products.partials.form')

                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
