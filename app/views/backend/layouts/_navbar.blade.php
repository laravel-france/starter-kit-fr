<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{ URL::to('admin') }}"><i class="icon-home icon-white"></i> {{Lang::get('backend/menu.admin_home')}}</a></li>
          <li class="dropdown{{ (Request::is('admin/users*|admin/groups*') ? ' active' : '') }}">
            <a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('admin/users') }}">
              <i class="icon-user icon-white"></i> {{Lang::get('backend/menu.users.title')}} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/users') }}"><i class="icon-user"></i> {{Lang::get('backend/menu.users.submenus.users')}}</a></li>
              <li{{ (Request::is('admin/groups*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/groups') }}"><i class="icon-list-alt"></i> {{Lang::get('backend/menu.users.submenus.groups')}}</a></li>
            </ul>
          </li>
        </ul>

        <!-- User bar -->
        @include('backend/layouts/_userbar')

      </div>
    </div>
  </div>
</div>
