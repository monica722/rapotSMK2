<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $matapelajaran->nama }}</p>
</div>

<!-- Semester Field -->
<div class="form-group">
    {!! Form::label('semester', 'Semester:') !!}
    <p>{{ $matapelajaran->semester }}</p>
</div>

<!-- Idguru Field -->
<div class="form-group">
    {!! Form::label('idguru', 'Idguru:') !!}
    <p>{{ $matapelajaran->idguru }}</p>
</div>

