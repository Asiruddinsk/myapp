<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>About Us</title>
        @include('components.home.css-link')

    </head>

    <body>
        <div class="main">

            @include('components.home.nav')

            <!-- header end============ -->


            <!-- about page dsign----------- -->

            @include('components.home.about')







            <!-- footer start============ -->

            @include('components.home.footer')


        </div>


        <script src="{{asset('/asset/js/index.js')}}"></script>

    </body>

</html>