<header>

    <div class="flex">
        <div class="logo-div">
            <img src="{{('asset/dashboard/image/codezara-logo-codezara.png')}}" width="50" height="50" class="ibr">
        </div>
        <div class="">
            <button onclick="openNavbarFunction()" class="bar-btn">&#9776;</button>
            <a href="dashboard.html" class="white">Dashboard</a>
        </div>
    </div>

    <div class="nav" id="myNav">
        <a href="{{('/home')}}">
            <div class="side-link">
                <i class="fa fa-home"></i>
                <span>Home</span>

            </div>
        </a>
        <a href="{{('/catagory')}}">
            <div class="side-link">
                <i class="fa fa-list-alt"></i>
                <span>Catagory</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-photo"></i>
                <span>Post</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-list"></i>
                <span>Subcatagory</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fas fa-image"></i>
                <span>Image</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fas fa-video"></i>
                <span>Video</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-briefcase"></i>
                <span>Product</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-link"></i>
                <span>Link</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-header"></i>
                <span>Title</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fas fa-paragraph"></i>
                <span>Paragraph</span>
            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-info-circle"></i>
                <span>Product info</span>

            </div>
        </a>
        <a href="">
            <div class="side-link">
                <i class="fa fa-file-pdf-o"></i>
                <span>File Pdf</span>

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
            <img src="{{('asset/dashboard/image/Im.jpg')}}" width="50" height="50" class="ibr">
            @auth

            <a href="javascript:void(0)" class="nav-link" onclick="profileFunction()">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" width="50" height="50"
                    style="border: 1px solid white;border-radius:50px;padding:3px;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.5)" />
                @else
                {{ Auth::user()->name }}
                @endif
            </a>

            <div class="dash-profile" id="dashProfile">
                <a href="{{ url('/dashboard') }}" class="{{'dashboard' == request()->path() ? 'activelink' : '' }}">
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