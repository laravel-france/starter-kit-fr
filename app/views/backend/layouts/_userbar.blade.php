<ul class="nav pull-right">
  <li class="dropdown{{ (Request::is('account*') ? ' active' : '') }}">
    <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ route('account') }}">
      {{Lang::get('frontend/menu.user.welcome')}}{{Sentry::getUser()->first_name}}
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      <li{{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><i class="icon-user"></i> {{Lang::get('frontend/menu.user.submenus.profile')}}</a></li>
      <li><a href="{{ URL::to('/') }}">{{Lang::get('backend/menu.site_home')}}</a></li>
      <li class="divider"></li>
      <li><a href="{{ route('logout') }}"><i class="icon-off"></i> {{Lang::get('frontend/menu.user.submenus.logout')}}</a></li>
    </ul>
  </li>
</ul>
