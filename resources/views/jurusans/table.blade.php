<div class="table-responsive">
    <table class="table" id="jurusans-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jurusans as $jurusan)
            <tr>
                <td>{{ $jurusan->nama }}</td>
                <td>
                    {!! Form::open(['route' => ['jurusans.destroy', $jurusan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('jurusans.show', [$jurusan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('jurusans.edit', [$jurusan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
