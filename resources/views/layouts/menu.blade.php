<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('bustypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bustypes.index') }}"><i class="fas fa-building"></i><span>Bustypes</span></a>
</li>

<li class="side-menus {{ Request::is('busOwners*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('busOwners.index') }}"><i class="fas fa-building"></i><span>Bus Owners</span></a>
</li>

<li class="side-menus {{ Request::is('businfos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('businfos.index') }}"><i class="fas fa-building"></i><span>Businfos</span></a>
</li>

<li class="side-menus {{ Request::is('counters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('counters.index') }}"><i class="fas fa-building"></i><span>Counters</span></a>
</li>

<li class="side-menus {{ Request::is('counters*') ? 'active' : '' }}">
    <a class="nav-link" href="booked_seat"><i class="fas fa-building"></i><span>Booked Seat</span></a>
</li>

<li class="side-menus {{ Request::is('counters*') ? 'active' : '' }}">
    <a class="nav-link" href="ticket_sold_status"><i class="fas fa-building"></i><span>   Sold Ticket Status </span></a>
</li>

<li class="side-menus {{ Request::is('counters*') ? 'active' : '' }}">
    <a class="nav-link" href="daily_sales_status"><i class="fas fa-building"></i><span>Daily Sales Statement</span></a>
</li>

<li class="side-menus {{ Request::is('counters*') ? 'active' : '' }}">
    <a class="nav-link" href="payment_report"><i class="fas fa-building"></i><span>Payment Report</span></a>
</li>

<li class="side-menus {{ Request::is('tripcosts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tripcosts.index') }}"><i class="fas fa-building"></i><span>Running Cost</span></a>
</li>

<!-- <li class="side-menus {{ Request::is('tripcosts*') ? 'active' : '' }}">
    <a class="nav-link" href="report"><i class="fas fa-building"></i><span>Report</span></a>
</li> -->





