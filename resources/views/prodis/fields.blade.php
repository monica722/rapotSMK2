<!-- Idjurusan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idjurusan', 'Idjurusan:') !!}
    {!! Form::number('idjurusan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Label Prodi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_label_prodi', 'Kode Label Prodi:') !!}
    {!! Form::text('kode_label_prodi', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Jurusan Prodi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_jurusan_prodi', 'Kode Jurusan Prodi:') !!}
    {!! Form::number('kode_jurusan_prodi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prodis.index') }}" class="btn btn-default">Cancel</a>
</div>
