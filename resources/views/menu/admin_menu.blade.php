<li>
    <a href="{{ url('/data-admin') }}">
      <i class="fa fa-user"></i> <span>Data Admin</span>
    </a>
</li>
<li>
    <a href="{{ url('/data-kepsek') }}">
      <i class="fa fa-user"></i> <span>Data Kepsek</span>
    </a>
</li>
{{-- <li>
  <a href="{{ url('/data-guru') }}">
    <i class="fa fa-users"></i> <span>Data Guru</span>
  </a>
</li> --}}
<li class="treeview">
  <a href="#">
    <i class="fa fa-table"></i>
    <span>Data Guru</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('/guru-mapel') }}"><i class="fa fa-circle-o"></i> Guru Mata Pelajaran</a></li>
    <li><a href="{{ url('/guru-extra') }}"><i class="fa fa-circle-o"></i> Guru Extrakulikuler</a></li>
  </ul>
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
    <a href="{{ url('/data-extra') }}">
      <i class="fa fa-table"></i> <span>Extrakulikuler</span>
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
