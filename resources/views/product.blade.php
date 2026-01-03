<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Codezara Product </title>
        @include('components.home.css-link')

    </head>

    <body>
        <div class="main">
            @include('components.home.nav')


            {{-- product========= --}}

            @include('components.home.product')


            {{-- footer=========== --}}
            @include('components.home.footer')
        </div>


        <script src="{{asset('/asset/js/index.js')}}"></script>

    </body>

</html>