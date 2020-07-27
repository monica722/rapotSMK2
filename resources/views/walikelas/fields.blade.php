<!-- Idkelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idkelas', 'Idkelas:') !!}
    {!! Form::number('idkelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Idguru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idguru', 'Idguru:') !!}
    {!! Form::number('idguru', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('walikelas.index') }}" class="btn btn-default">Cancel</a>
</div>
