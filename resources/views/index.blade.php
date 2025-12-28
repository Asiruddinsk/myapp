<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Codezara Website Designer ">
        <meta name="keywords" content="Codezara ">
        <meta name="author" content="Codezara ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Codezara</title>
        <link rel="icon" type="image/x-icon" href="image/codezara-favicon.png">
        <link rel="stylesheet" media="screen and (min-width:600px)" href="{{asset('asset/css/desktop.css')}}">
        <link rel="stylesheet" media="screen and (max-width:600px)" href="{{asset('asset/css/mobile.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    </head>

    <body>
        <div class="main">

            @include('components.home.nav')

            <!-- header end============ -->
            @include('components.home.language')

            @include('components.home.filter')

            <div class="scrollmenu-design">
                <a href="#home">
                    <i class="fa-solid fa-code f-size"></i>
                </a>
                <a href="#news">
                    <i class="fa-solid fa-user f-size"></i>
                </a>
                <a href="#contact">
                    <i class="fa-solid fa-briefcase f-size"></i>
                </a>
                <a href="#about">
                    <i class="fa-solid fa-image f-size"></i>
                </a>
                <a href="#about">
                    <i class="fa-solid fa-video f-size"></i>
                </a>
                <a href="#about">
                    <i class="fa-solid fa-film f-size"></i>
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


        <script src="{{asset('asset/js/index.js')}}"></script>

    </body>

</html>