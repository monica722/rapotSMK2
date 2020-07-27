<div class="table-responsive">
    <table class="table" id="nilairaports-table">
        <thead>
            <tr>
                <th>Iddetail Rapot</th>
        <th>Nilai Tugas</th>
        <th>Nilai Uas</th>
        <th>Nilai Uts</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nilairaports as $nilairaport)
            <tr>
                <td>{{ $nilairaport->iddetail_rapot }}</td>
            <td>{{ $nilairaport->nilai_tugas }}</td>
            <td>{{ $nilairaport->nilai_uas }}</td>
            <td>{{ $nilairaport->nilai_uts }}</td>
                <td>
                    {!! Form::open(['route' => ['nilairaports.destroy', $nilairaport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nilairaports.show', [$nilairaport->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('nilairaports.edit', [$nilairaport->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
