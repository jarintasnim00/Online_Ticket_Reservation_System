<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('bustypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bustypes.index') }}"><i class="fas fa-building"></i><span>Bustypes</span></a>
</li>

<li class="side-menus {{ Request::is('businfos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('businfos.index') }}"><i class="fas fa-building"></i><span>Businfos</span></a>
</li>

