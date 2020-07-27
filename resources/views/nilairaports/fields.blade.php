<!-- Iddetail Rapot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddetail_rapot', 'Iddetail Rapot:') !!}
    {!! Form::number('iddetail_rapot', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Tugas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_tugas', 'Nilai Tugas:') !!}
    {!! Form::text('nilai_tugas', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Uas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_uas', 'Nilai Uas:') !!}
    {!! Form::text('nilai_uas', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Uts Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_uts', 'Nilai Uts:') !!}
    {!! Form::text('nilai_uts', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('nilairaports.index') }}" class="btn btn-default">Cancel</a>
</div>
