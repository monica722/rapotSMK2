<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Idprodi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idprodi', 'Idprodi:') !!}
    {!! Form::number('idprodi', null, ['class' => 'form-control']) !!}
</div>

<!-- Idwali Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idwali_kelas', 'Idwali Kelas:') !!}
    {!! Form::number('idwali_kelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kelas.index') }}" class="btn btn-default">Cancel</a>
</div>
