@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Profesor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($profesor, ['route' => ['profesors.update', $profesor->id], 'method' => 'patch']) !!}

                        @include('profesors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
