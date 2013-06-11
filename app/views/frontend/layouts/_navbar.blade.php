<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="nav-collapse collapse">
        <ul class="nav">
          <li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ route('home') }}"><i class="icon-home icon-white"></i> {{Lang::get('frontend/menu.home')}}</a></li>
          <li {{ (Request::is('about-us') ? 'class="active"' : '') }}><a href="{{ URL::to('about-us') }}"><i class="icon-file icon-white"></i> {{Lang::get('frontend/menu.about-us')}}</a></li>
          <li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}"><i class="icon-file icon-white"></i> {{Lang::get('frontend/menu.contact-us')}}</a></li>
        </ul>

        <!-- User bar -->
        @include('frontend/layouts/_userbar')

      </div>
    </div>
  </div>
</div>
