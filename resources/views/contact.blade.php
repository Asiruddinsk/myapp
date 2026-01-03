<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

    </body>

</html>


<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contact Us</title>
        @include('components.home.css-link')

    </head>

    <body>
        <div class="main">
            @include('components.home.nav')




            @include('components.home.contact')





            {{-- footer=========== --}}
            @include('components.home.footer')
        </div>


        <script src="{{asset('/asset/js/index.js')}}"></script>

    </body>

</html>