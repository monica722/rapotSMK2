<!-- Nip Field -->
<div class="form-group">
    {!! Form::label('nip', 'NIP:') !!}
    <p>{{ $guru->nip }}</p>
</div>

<!-- Iduser Field -->
<div class="form-group">
    {!! Form::label('iduser', 'Nama :') !!}
    <p>{{ $guru->userguru->name }}</p>
</div>

