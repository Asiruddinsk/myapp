<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Reset Password</title>
        @include('components.home.css-link')


    </head>

    <body>
        <div class="main">
            <div class="reset-password-d">
                @include('components.logo')
                <x-validation-errors class="mb-4 text-danger" />

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <input type="email" name="email" :value="old('email', $request->email)" placeholder="email" required
                        autofocus autocomplete="username" class="form-control fs px-1 mt-1">
                    <input type="password" name="password" required autocomplete="new-password"
                        placeholder="new password" class="form-control fs px-1 mt-1">
                    <input type="password" name="password_confirmation" required autocomplete="new-password"
                        placeholder="confirmation password" class="form-control fs px-1 mt-1">

                    <button class="form-control fs px-1 mt-1 submit-btn">
                        {{ __('Reset Password') }}
                    </button>
                </form>
            </div>





            {{-- footer=========== --}}
            {{-- @include('components.home.footer') --}}
        </div>


        @include('components.home.js-link')

    </body>

</html>