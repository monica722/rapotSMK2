<div class="table-responsive">
    <table class="table" id="prodis-table">
        <thead>
            <tr>
                <th>Idjurusan</th>
        <th>Nama</th>
        <th>Kode Label Prodi</th>
        <th>Kode Jurusan Prodi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prodis as $prodi)
            <tr>
                <td>{{ $prodi->idjurusan }}</td>
            <td>{{ $prodi->nama }}</td>
            <td>{{ $prodi->kode_label_prodi }}</td>
            <td>{{ $prodi->kode_jurusan_prodi }}</td>
                <td>
                    {!! Form::open(['route' => ['prodis.destroy', $prodi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prodis.show', [$prodi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('prodis.edit', [$prodi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
