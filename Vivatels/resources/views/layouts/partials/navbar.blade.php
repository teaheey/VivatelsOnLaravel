<!-- header section strats -->
<header class="header_section">
  
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        <span>
          Vivatels
        </span>
      </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="/">{{__('messages.nav-start')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about"> {{__('messages.nav-about')}} </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service"> {{__('messages.nav-service')}} </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact"> {{__('messages.nav-contact')}} </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery"> {{__('messages.nav-gallery')}} </a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                        @endif
                    @endforeach
                    </div>
            </li>
          </ul>
        </div>
      </div>
      

        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2"> {{__('messages.nav-logout')}}</a>
            <a href="{{ route('register.perform') }}" style = "background-color:#ff4f5a; color:white" class="btn"> {{__('messages.nav-register')}} </a>
          </div>
        @endauth

        @guest
          <div class="text-end">
          
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2"> {{__('messages.nav-login')}} </a>
          </div>
        @endguest
    </nav>

  </div>   
  
</header>
    <!-- end header section -->

