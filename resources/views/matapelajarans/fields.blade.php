<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester', 'Semester:') !!}
    {!! Form::text('semester', null, ['class' => 'form-control']) !!}
</div>

<!-- Idguru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idguru', 'Nama Guru :') !!}
    {!! Form::select('idguru', $guru, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('matapelajarans.index') }}" class="btn btn-default">Cancel</a>
</div>
