@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Sertore
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sertore, ['route' => ['sertores.update', $sertore->id], 'method' => 'patch']) !!}

                        @include('sertores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
