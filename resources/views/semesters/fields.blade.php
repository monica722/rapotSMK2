<!-- Semester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester', 'Semester:') !!}
    {!! Form::number('semester', null, ['class' => 'form-control']) !!}
</div>

<!-- Tahunsemester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahunsemester', 'Tahunsemester:') !!}
    {!! Form::text('tahunsemester', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('semesters.index') }}" class="btn btn-default">Cancel</a>
</div>
