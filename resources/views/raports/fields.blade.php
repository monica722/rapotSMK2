<!-- Idsiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsiswa', 'Idsiswa:') !!}
    {!! Form::number('idsiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmapel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmapel', 'Idmapel:') !!}
    {!! Form::number('idmapel', null, ['class' => 'form-control']) !!}
</div>

<!-- Idsemester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsemester', 'Idsemester:') !!}
    {!! Form::number('idsemester', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Nilai Tugas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_nilai_tugas', 'Total Nilai Tugas:') !!}
    {!! Form::number('total_nilai_tugas', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Uts Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_uts', 'Nilai Uts:') !!}
    {!! Form::number('nilai_uts', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Uas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_uas', 'Nilai Uas:') !!}
    {!! Form::number('nilai_uas', null, ['class' => 'form-control']) !!}
</div>

<!-- Bobot Nilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bobot_nilai', 'Bobot Nilai:') !!}
    {!! Form::text('bobot_nilai', null, ['class' => 'form-control']) !!}
</div>

<!-- Predikat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predikat', 'Predikat:') !!}
    {!! Form::text('predikat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raports.index') }}" class="btn btn-default">Cancel</a>
</div>
