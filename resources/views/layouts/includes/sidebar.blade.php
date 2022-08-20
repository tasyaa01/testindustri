<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"> {{Auth::user()->name ?? ' '}}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                 <a href="{{ route('murid.index') }}"
                     class="nav-link {{ Request::is('admin/murid*') ? 'active' : '' }}">
                     <i class="nav-icon fas fa-copy"></i>
                     <p>
                         Murid
                     </p>
                 </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('guru.index') }}"
                         class="nav-link {{ Request::is('admin/guru*') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Guru
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>