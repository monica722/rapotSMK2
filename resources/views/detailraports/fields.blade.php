<!-- Idrapot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idrapot', 'Idrapot:') !!}
    {!! Form::number('idrapot', null, ['class' => 'form-control']) !!}
</div>

<!-- Bobotnilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bobotnilai', 'Bobotnilai:') !!}
    {!! Form::text('bobotnilai', null, ['class' => 'form-control']) !!}
</div>

<!-- Kodenilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kodenilai', 'Kodenilai:') !!}
    {!! Form::text('kodenilai', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detailraports.index') }}" class="btn btn-default">Cancel</a>
</div>
