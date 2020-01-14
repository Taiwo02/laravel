  <div class="">
    <nav class="navbar navbar-expand-md navbar-inverse bg-success  shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light " href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                {{-- @if ()    
                <img class="pull-right ml-5" src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px;height:32px;border-radius:100%;"/>
                @endif --}}
                <button style="outline:none" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class=" navbar-toggler-icon text-light">
                    {{-- @if () 
                     <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px;height:32px;position:absolute;top:10px;letf:10px;border-radius:100%;"/>
                    @endif --}}
                    
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto">
  					<li class="nav-item "><a href="/" class="nav-link text-light"> Home</a></li>
  					<li class="nav-item"><a href="/gallary" class="nav-link text-light">Galary</a></li>
  					<li class="nav-item"><a href="/about" class="nav-link text-light"> About</a></li>
  					<li class="nav-item"><a href="/post" class="nav-link text-light"> Blogs</a></li>
  				</ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative;padding-left:50px;"><br><br>
                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px;height:32px;position:absolute;top:10px;letf:10px;border-radius:100%;"/>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                     <a href="/profile">profile</a><br>                                      
                                     <a href="/dashboard">dashboard</a><br> 
                                     <a href="/gallary">gallary</a> 
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                
                </div>
            </div>
        </nav>
                  </div>
              <div class=" container-fluid" >
                  <ul class="bg-success row">
  					<li style="listStyleType:none" class="nav-item col-2 col-lg-3  "><a href="/" class="nav-link col-1   text-light">Home</a></li>  					
                      <li style="listStyleType:none" class="nav-item  col-2 col-lg-3 "><a href="/Messages" class="nav-link col-1 text-light">chat</a></li>
  					<li style="listStyleType:none" class="nav-item col-2 col-lg-3 "><a href="/post/create" class="nav-link col-1 text-light">Post</a></li>
  					<li style="listStyleType:none" class="nav-item col-2 col-lg-3 "><a href="/users" class="nav-link col-1 text-light">Users</a></li>
                  </ul>
                  </div>