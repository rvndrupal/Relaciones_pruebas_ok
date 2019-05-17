<div class="table-responsive">
    <table class="table" id="profesors-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profesors as $profesor)
            <tr>
                <td>{!! $profesor->nombre !!}</td>
            <td>{!! $profesor->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['profesors.destroy', $profesor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('profesors.show', [$profesor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('profesors.edit', [$profesor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
