@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Ponente
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ponentes.store', 'files' => true]) !!}

                        @include('ponentes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
