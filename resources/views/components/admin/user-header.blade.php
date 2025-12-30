<header>

    <div class="flex">
        <div class="logo-div">
            <img src="{{('asset/dashboard/image/codezara-logo-codezara.png')}}" width="50" height="50" class="ibr">
        </div>
        <div class="dashbord-link">
            <button onclick="openNavbarFunction()" class="bar-btn">&#9776;</button>
            <a href="{{('/home')}}" class="{{'home' == request()->path() ? 'activelink' : '' }}">Dashboard</a>
        </div>
    </div>

    <div class="nav" id="myNav">
        <a href="{{('/file')}}">
            <div class="side-link">
                <i class="fa fa-file"></i>
                <span>File</span>

            </div>
        </a>


    </div>

    <div class="flex">
        <div class="">
            <a href="" class="cart">
                <i class="fa fa-shopping-cart"></i>
                <span class="cart-number">0</span>
            </a>
        </div>
        <div class="center-d">

            @auth

            <a href="javascript:void(0)" class="nav-link" onclick="profileFunction()">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img class="size-8 rounded-full object-cover ibr" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" width="50" height="50" />
                @else
                {{ Auth::user()->name }}
                @endif
            </a>

            <div class="dash-profile" id="dashProfile">
                <a href="{{ url('/home') }}" class="{{'home' == request()->path() ? 'activelink' : '' }}">
                    Dashboard</a>
                <a href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="nav-link">
                        {{ __('Log Out') }}
                    </a>
                </form>

                @else

                {{-- <a href="{{ route('login') }}" class="signin-btn">Log in</a> --}}

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="signin-btn">My account</a>
                @endif
            </div>

            @endauth
        </div>
    </div>

</header>