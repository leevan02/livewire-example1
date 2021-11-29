<!-- Sidebar -->
<nav
id="sidebarMenu"
class="collapse d-lg-block sidebar collapse bg-white"
>
<div class="position-sticky">
<div class="list-group list-group-flush mx-3 mt-4">
 <a
    href="dashboard"
    class="list-group-item list-group-item-action py-2 ripple {{ request()->is('dashboard') ? 'active' : '' }}"
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
   href="{{ url('admin/Teacher') }}"
   class="list-group-item list-group-item-action py-2 ripple {{ request()->is('admin/Teacher') ? 'active' : '' }} "
   ><i class="fas fa-users fa-fw me-3"></i><span>Teacher</span></a
  >
 <a
    href="{{ url('admin/subject') }}"
    class="list-group-item list-group-item-action py-2 ripple  {{ request()->is('admin/subject') ? 'active' : '' }} "
    ><i class="fas fa-braille me-3"></i><span>subjects</span></a
   >
   <a
   href="{{ url('admin/schedule') }}"
   class="list-group-item list-group-item-action py-2 ripple  {{ request()->is('admin/schedule') ? 'active' : '' }} "
   ><i class="fas fa-braille me-3"></i><span>schedule</span></a
  >
   <a
   href="{{ url('classes') }}"
   class="list-group-item list-group-item-action py-2 ripple {{ request()->is('classes') ? 'active' : '' }} "
   ><i class="fas fa-users fa-fw me-3"></i><span>Classes</span></a
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