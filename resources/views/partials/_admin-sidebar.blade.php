<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">

        <a href="#"><i class="fa fa-user"></i> <span>User</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/parent') }}">Orang Tua</a></li>
          <li><a href="{{ url('/admin/child') }}">Anak</a></li>
          <li><a href="{{ url('/admin/users') }}">Administrator</a></li>
        </ul>
      </li>

      <li class="treeview">

        <a href="#"><i class="fa fa-users"></i> <span>Keluarga</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/family') }}">List Keluarga</a></li>
          <li><a href="{{ url('/admin/family/create') }}">Tambah Keluarga</a></li>
        </ul>
      </li>

      <li class="treeview">

        <a href="#"><i class="fa fa-circle"></i> <span>Chat</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/chat') }}">List Chat</a></li>
        </ul>
      </li>

      <li class="treeview">

        <a href="#"><i class="fa fa-calendar"></i> <span>Agenda</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/event') }}">List Agenda</a></li>
        </ul>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>