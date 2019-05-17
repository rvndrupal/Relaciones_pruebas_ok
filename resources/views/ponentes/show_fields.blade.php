<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $ponente->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $ponente->nombre !!}</p>
</div>

<!-- Pais Field -->
<div class="form-group">
    {!! Form::label('pais', 'Pais:') !!}
    <p>{!! $ponente->pais !!}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ $ponente->foto }}" alt="{{ $ponente->nombre }}" style="width: 120px;"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $ponente->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $ponente->updated_at !!}</p>
</div>

