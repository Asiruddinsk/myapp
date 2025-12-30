<div class="sticky">
    <header>
        <div class="menu-logo">
            <img src="{{asset('asset/image/codezara-logo-codezara.png')}}" class="logo" alt="" width="60" height="60">
            <button class="bar" onclick="openMenuFunction()">&#9776;</button>
        </div>


        <div id="myNav" class="myNav">

            <button onclick="closeFunction()" class="btn-close">&times;</button>

            <nav>

                <a href="{{('/')}}" class="{{'/' == request()->path() ? 'activelink' : '' }}">
                    Home
                </a>
                <a href="{{('/about')}}" class="{{'about' == request()->path() ? 'activelink' : '' }}">About</a>
                <a href="{{('/product')}}" class="{{'product' == request()->path() ? 'activelink' : '' }}">Services</a>
                <a href="{{('/contact')}}" class="{{'contact' == request()->path() ? 'activelink' : '' }}">Contact</a>
            </nav>

        </div>

        <div class="search-btn">
            <input type="search" name="search">
            <button type="submit" class="submit-btn-search">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div class="signup">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="signup-btn">
                {{Auth::user()->name}}
            </a>
            @else

            <button class="signup-btn" onclick="signInFunction()"><i class="fas fa-user"></i>Sign In</button>
            @endauth

            @endif
        </div>

    </header>

    <!-- signin start======= -->
    <div id="mySignin" class="mySignin-content">
        <span class="close-signin" onclick="signinCloseFunction()">&times;</span>
        <x-validation-errors class="mb-4" />
        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-center">
                <h2>Sign In</h2>
                <p class="mt-1">Get access to more learning features</p>
            </div>
            <div class="mt-1 text-center">
                <span>Don't have an account?</span> <span class="register-toggle"
                    onclick="registerFunction()">Register</span>
            </div>

            <input type="email" name="email" type="email" placeholder="Email" required
                class="form-control fs px-1 mt-1">
            <input type="password" name="password" type="password" placeholder="Password" required
                class="form-control fs px-1 mt-1">

            <input type="checkbox" class="mt-1" id="remember_me" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

            <div class="mt-1"><span class="register-toggle" onclick="forgotFunction()">Forgot your password?</span>
            </div>

            <button class="form-control fs px-1 mt-1 submit-btn">
                {{ __('Log in') }}
            </button>
        </form>
    </div>

    <!-- register end======= -->

    <!-- register start======= -->

    <div id="mySignin_1" class="mySignin-content-1">
        <span class="close-signin" onclick="signinCloseFunction()">&times;</span>
        <x-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="text-center">
                <h2>Create your account</h2>
            </div>
            <div class="mt-1 text-center">
                <span>Already have an account?</span> <span class="register-toggle" onclick="registerFunction()">Sign
                    In</span>
            </div>

            <input type="name" name="name" type="text" placeholder="Name" required class="form-control fs px-1 mt-1">
            <input type="email" name="email" type="email" placeholder="Email" required
                class="form-control fs px-1 mt-1">
            <input type="password" name="password" type="password" placeholder="Password" required
                class="form-control fs px-1 mt-1">
            <input type="password" name="password_confirmation" type="password" placeholder="password_confirmation"
                required class="form-control fs px-1 mt-1">

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <input type="checkbox" name="terms" id="terms" required>

                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <button class="form-control fs px-1 mt-1 submit-btn">
                {{ __('Create account') }}
            </button>
        </form>
    </div>

    <!-- register end======= -->


    <!-- reset password start-->

    <div id="mySignin_2" class="mySignin-content-2">
        <span class="close-signin" onclick="signinCloseFunction()">&times;</span>
        <div class="mt-1">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        @session('status')
        <div class="text-green">
            {{ $value }}
        </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="text-center">
                <h2>Forgot Password</h2>

            </div>

            <input type="email" name="email" type="email" placeholder="Enter your email address" required
                class="form-control fs px-1 mt-1">


            <button class="form-control fs px-1 mt-1 submit-btn">
                {{ __('Email Password Reset Link') }}
            </button>

            <div class="mt-1 text-center"><span>Return to</span> <span class="register-toggle"
                    onclick="signInFunction()">Sign in</span></div>
        </form>
    </div>

    <!-- reset password end-->

</div>