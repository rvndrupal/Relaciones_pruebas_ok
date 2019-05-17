<div class="table-responsive">
    <table class="table" id="sertores-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sertores as $sertore)
            <tr>
                <td>{!! $sertore->nombre !!}</td>
            <td>{!! $sertore->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['sertores.destroy', $sertore->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('sertores.show', [$sertore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('sertores.edit', [$sertore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
