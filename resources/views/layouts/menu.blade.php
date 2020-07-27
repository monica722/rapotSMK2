@role('admin')
<li class="{{ Request::is('gurus*') ? 'active' : '' }}">
    <a href="{{ route('gurus.index') }}"><i class="fa fa-user"></i><span>Guru</span></a>
</li>

<li class="{{ Request::is('jurusans*') ? 'active' : '' }}">
    <a href="{{ route('jurusans.index') }}"><i class="fa fa-suitcase"></i><span>Jurusan</span></a>
</li>

<li class="{{ Request::is('matapelajarans*') ? 'active' : '' }}">
    <a href="{{ route('matapelajarans.index') }}"><i class="fa fa-book"></i><span>Mata Pelajaran</span></a>
</li>

<li class="{{ Request::is('prodis*') ? 'active' : '' }}">
    <a href="{{ route('prodis.index') }}"><i class="fa fa-university"></i><span>Prodi</span></a>
</li>

<li class="{{ Request::is('raports*') ? 'active' : '' }}">
    <a href="{{ route('raports.index') }}"><i class="fa fa-book"></i><span>Raport</span></a>
</li>

<li class="{{ Request::is('semesters*') ? 'active' : '' }}">
    <a href="{{ route('semesters.index') }}"><i class="fa fa-sort-numeric-asc"></i><span>Semester</span></a>
</li>

<li class="{{ Request::is('siswas*') ? 'active' : '' }}">
    <a href="{{ route('siswas.index') }}"><i class="fa fa-user"></i><span>Siswa</span></a>
</li>

<li class="{{ Request::is('walikelas*') ? 'active' : '' }}">
    <a href="{{ route('walikelas.index') }}"><i class="fa fa-user"></i><span>Wali Kelas</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>User</span></a>
</li>
@endrole

@role('walikelas')
<li class="{{ Request::is('raports*') ? 'active' : '' }}">
    <a href="{{ route('raports.index') }}"><i class="fa fa-book"></i><span>Raport</span></a>
</li>
@endrole

@role('siswa')
<li class="{{ Request::is('raports*') ? 'active' : '' }}">
    <a href="{{ route('raports.index') }}"><i class="fa fa-book"></i><span>Raport</span></a>
</li>
@endrole

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

