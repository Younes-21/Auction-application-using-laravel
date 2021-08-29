
  <div style="width: 100%;height: 80px; background-color: black;padding-right: 40px;padding-top: 20px;">
      <h1 id="logo"><img src="{{ asset('assets/image/logo.jpg')  }}" style="height:95% ; width: 100%;padding-left: 50px;"></h1>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" style="color: white;" aria-current="page" href="{{ url('articles') }}">Acceuil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color: white;" aria-current="page" href="{{ url('articles/create') }}">Vendre produit</a>
  </li>
  <div class="navbar navbar-expand-lg navbar-dark" style="padding-top:0px;">                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav justify-content-end">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

 

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

 

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: black" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>

 

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

 

  </div>
</ul>
</div>
