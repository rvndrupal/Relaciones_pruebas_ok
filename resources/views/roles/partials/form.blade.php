<div class="from-group">
        {!! Form::label('name','Nombre') !!}

        {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>
<div class="from-group">
        {!! Form::label('slug','URL Amigable') !!}

        {!! Form::text('slug', null, ['class' => 'form-control']) !!}

</div>
<div class="from-group">
        {!! Form::label('description','Descripción') !!}

        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

</div>
    <hr>
    <h3>Permiso Especial</h3>
    <label>{{  Form::radio('special','all-access') }} Acceso Total</label>
    <label>{{  Form::radio('special','no-access') }} Ningun Acceso</label>
    <hr>




    {{--  <h3>Lista de Permisos</h3>
    <div class="form-group">
        <ul class="list-unstyled">
            @foreach ($permissions as $permission )
            <li>
                <label>
                   {{   Form::checkbox('permissions[]', $permission->id, null) }}
                   {{ $permission->name }}
                   <em>( {{ $permission->description ?: 'N/A' }})</em>
                </label>
            </li>

            @endforeach

        </ul>
    </div>  --}}

    <h3>Lista de Permisos</h3>
    <div class="form-group">
        	{{ Form::select('permissions[]', $permissions, null, ['class' => 'form-control select_permissions','multiple']) }}
    </div>



    <div class="from-group">

        {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}

    </div>


@section('scripts')
<link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}">
<script src="{{ asset('js/chosen.jquery.min.js') }}"></script>

    <script>
    $('.select_permissions').chosen({
        placeholder_text_multiple:'Seleccione una opción ',
        no_results_text: 'No se encontro el permiso',

    });
    </script>


@endsection
