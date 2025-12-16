<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer, about us ">
        <meta name="keywords" content="Codezara, about us">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>About Us</title>
        @include('components.home.css-link')

    </head>

    <body>
        <div class="main">
            @include('components.home.nav')

            {{-- about us=========== --}}

            @include('components.home.about')


            {{-- footer=========== --}}
            @include('components.home.footer')
        </div>


        @include('components.home.js-link')

    </body>

</html>