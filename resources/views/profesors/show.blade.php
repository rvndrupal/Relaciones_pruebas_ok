@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Profesor
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('profesors.show_fields')
                    <a href="{!! route('profesors.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
