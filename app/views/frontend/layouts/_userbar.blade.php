<ul class="nav pull-right">
  @if (Sentry::check())

  <li class="dropdown{{ (Request::is('account*') ? ' active' : '') }}">
    <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ route('account') }}">
      {{Lang::get('frontend/menu.user.welcome')}}{{Sentry::getUser()->first_name}}
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      @if(Sentry::getUser()->hasAccess('admin'))
      <li><a href="{{ route('admin') }}"><i class="icon-cog"></i> {{Lang::get('frontend/menu.user.submenus.admin')}}</a></li>
      @endif
      <li{{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><i class="icon-user"></i> {{Lang::get('frontend/menu.user.submenus.profile')}}</a></li>
      <li class="divider"></li>
      <li><a href="{{ route('logout') }}"><i class="icon-off"></i> {{Lang::get('frontend/menu.user.submenus.logout')}}</a></li>
    </ul>
  </li>
  @else
  <li {{ (Request::is('auth/signin') ? 'class="active"' : '') }}><a href="{{ route('signin') }}">{{Lang::get('frontend/menu.signin')}}</a></li>
  <li {{ (Request::is('auth/signup') ? 'class="active"' : '') }}><a href="{{ route('signup') }}">{{Lang::get('frontend/menu.signup')}}</a></li>
  @endif
</ul>
