{{-- <li>
    <a href="{{ url('/data-admin') }}">
      <i class="fa fa-user"></i> <span>Data Admin</span>
    </a>
</li>
<li>
    <a href="{{ url('/data-kepsek') }}">
      <i class="fa fa-user"></i> <span>Data Kepsek</span>
    </a>
</li> --}}

<li>
  <a href="{{ url('/format-raport') }}">
    <i class="fa fa-book"></i> <span>Format Raport</span>
  </a>
</li>

<li>
  <a href="{{ url('/data-guru') }}">
    <i class="fa fa-users"></i> <span>Data Guru</span>
  </a>
</li>

<li>
  <a href="{{ url('/data-siswa') }}">
    <i class="fa fa-users"></i> <span>Data Siswa</span>
  </a>
</li>
<li>
    <a href="{{ url('/data-mapel') }}">
      <i class="fa fa-book"></i> <span>Mata Pelajaran</span>
    </a>
</li>
<li>
    <a href="{{ url('/data-kelas') }}">
      <i class="fa fa-table"></i> <span>Data Kelas</span>
    </a>
</li>
<li>
    <a href="{{ url('/data-tha') }}">
      <i class="fa fa-table"></i> <span>Tahun Ajaran</span>
    </a>
</li>

<li>
  <a href="{{ url('/data-user') }}">
    <i class="fa fa-user"></i> <span>Data User</span>
  </a>
</li>
<li class="header">Setting</li>  
<li>
  <a href="{{ url('/data-sekolah') }}">
    <i class="fa fa-home"></i> <span>Data Sekolah</span>
  </a>
</li>
<li>
  <a href="{{ url('data-user/'.Auth::user()->id) }}">
    <i class="fa fa-gear"></i> <span>Akun</span>
  </a>
</li>
