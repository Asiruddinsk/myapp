<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Codezara</title>
        @include('components.home.css-link')

    </head>

    <body>
        <div class="main">

            @include('components.home.nav')

            <!-- header end============ -->
            @include('components.home.language')

            @include('components.home.filter')

            <div class="scrollmenu-design">
                <a href="#home">
                    <i class="fa-solid fa-code fs-1"></i>
                </a>
                <a href="#news">
                    <i class="fa-solid fa-user fs-1"></i>
                </a>
                <a href="#contact">
                    <i class="fa-solid fa-briefcase fs-1"></i>
                </a>
                <a href="#about">
                    <i class="fa-solid fa-image fs-1"></i>
                </a>
                <a href="#about">
                    <i class="fa-solid fa-video fs-1"></i>
                </a>
                <a href="#about">
                    <i class="fa-solid fa-film fs-1"></i>
                </a>
            </div>

            <!-- about page dsign----------- -->

            @include('components.home.about')

            <!-- product page design----------- -->
            @include('components.home.product')



            <!-- contact us page design============ -->

            @include('components.home.contact')





            <!-- footer start============ -->

            @include('components.home.footer')


        </div>


        <script src="{{asset('/asset/js/index.js')}}"></script>

    </body>

</html>