 
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
  @php
    $PermissionUser = App\Models\PermissionRoleModel::getPermission('User', Auth::user()->role_id);
    $PermissionRole = App\Models\PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
    
  @endphp

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif " href="{{ url('panel/dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif " href="{{ url('panel/user') }}">
      <i class="bi bi-person"></i>
      <span>User</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'role') collapsed @endif " href="{{ url('panel/role') }}">
      <i class="bi bi-person"></i>
      <span>Role </span>
    </a>
  </li>
  
  
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'message') collapsed @endif " href="{{ url('panel/message') }}">
      <i class="bi bi-person"></i>
      <span>Message</span>
    </a>
  </li>
 
 

</ul>

</aside>
