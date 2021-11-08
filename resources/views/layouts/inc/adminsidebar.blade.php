<!-- Sidebar -->
<nav
id="sidebarMenu"
class="collapse d-lg-block sidebar collapse bg-white"
>
<div class="position-sticky">
<div class="list-group list-group-flush mx-3 mt-4">
 <a
    href="/"
    class="list-group-item list-group-item-action py-2 ripple {{ request()->is('/') ? 'active' : '' }}"
    aria-current="true"
    >
   <i class="fas fa-tachometer-alt fa-fw me-3"></i
     ><span>Main dashboard</span>
 </a>
 <a
    href="{{ url('admin/user') }}"
    class="list-group-item list-group-item-action py-2 ripple {{ request()->is('admin/user') ? 'active' : '' }} "
    ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
   >
 <a
    href="{{ url('type_of_discussion') }}"
    class="list-group-item list-group-item-action py-2 ripple "
    ><i class="fas fa-braille me-3"></i><span>Discussions Type</span></a
   >
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple "
    ><i class="fas fa-chart-line fa-fw me-3"></i
   ><span>Analytics</span></a
   >
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple"
    >
   <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
 </a>
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple"
    ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
   >
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple"
    ><i class="fas fa-globe fa-fw me-3"></i
   ><span>International</span></a
   >
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple"
    ><i class="fas fa-building fa-fw me-3"></i
   ><span>Partners</span></a
   >
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple"
    ><i class="fas fa-calendar fa-fw me-3"></i
   ><span>Calendar</span></a
   >
 
 <a
    href="#"
    class="list-group-item list-group-item-action py-2 ripple"
    ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
   >
</div>
</div>
</nav>
<!-- Sidebar -->