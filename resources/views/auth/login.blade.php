<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login</title>
        @include('components.home.css-link')


    </head>

    <body>
        <div class="main">
            <div class="reset-password-d">
                @include('components.logo')
                <x-validation-errors class="mb-4 text-danger" />
                @session('status')
                <div class="mb-4 text-success">
                    {{ $value }}
                </div>
                @endsession

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center">
                        <h2>Login</h2>
                        <p class="mt-1">Get access to more learning features</p>
                    </div>

                    <input type="email" name="email" type="email" placeholder="Email" required
                        class="form-control fs px-1 mt-1">
                    <input type="password" name="password" type="password" placeholder="Password" required
                        class="form-control fs px-1 mt-1">

                    <input type="checkbox" class="mt-1" id="remember_me" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

                    <div class="mt-1">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>

                    <button class="form-control fs px-1 mt-1 submit-btn">
                        {{ __('Log in') }}
                    </button>
                </form>

            </div>





            {{-- footer=========== --}}
            {{-- @include('components.home.footer') --}}
        </div>


        @include('components.home.js-link')

    </body>

</html>