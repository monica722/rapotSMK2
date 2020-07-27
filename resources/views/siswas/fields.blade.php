<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nis', 'Nis:') !!}
    {!! Form::number('nis', null, ['class' => 'form-control']) !!}
</div>

<!-- Iduser Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iduser', 'Iduser:') !!}
    {!! Form::number('iduser', null, ['class' => 'form-control']) !!}
</div>

<!-- Idkelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idkelas', 'Idkelas:') !!}
    {!! Form::number('idkelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Idprodi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idprodi', 'Idprodi:') !!}
    {!! Form::number('idprodi', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Masuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_masuk', 'Tanggal Masuk:') !!}
    {!! Form::date('tanggal_masuk', null, ['class' => 'form-control','id'=>'tanggal_masuk']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tanggal_masuk').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Angkatan Thn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('angkatan_thn', 'Angkatan Thn:') !!}
    {!! Form::text('angkatan_thn', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('siswas.index') }}" class="btn btn-default">Cancel</a>
</div>
