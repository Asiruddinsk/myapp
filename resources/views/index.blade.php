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

            <div class="home">
                <div class="div-1">
                    <h2 class="letter-spacing">Web Development</h2>
                    <p>Hi, My Name is Asiruddin Sk and my work
                        Experience 4 years. I am a website designer
                        and developer. I am a Front-end Developer
                        with web programming languages HTML CSS, and JavaScript
                        and a Back-end Developer with web. Programming language
                        PHP, laravel, mysql, etc.

                    </p>
                    <a href="" class="link-btn">Download Now</a>
                </div>
                <div class="div-2">
                    <div class="div-3">
                        <div class="">
                            <h4>Asiruddin Sk</h4>
                            <h6>As a Full Stack Web Developer</h6>
                        </div>
                        <div class="">
                            <img src="{{asset('asset/image/Im.jpg')}}" alt="codezara"
                                style="width:150px;height:150px;object-fit:cover;border-radius:50%;border:5px solid #f4f4f4;margin-top:5px;">
                        </div>
                    </div>
                </div>
            </div>


            <div class="home-page">
                <div class="">
                    <span class="typewriter-1">I AM,</span> <span id="typewriter" class="typewriter-2"></span>
                </div>

                <div style="background-color: #1f2f21;">
                    <p class="text-light">Front-end Development Language: HTML, CSS, JAVASCRIPT, BOOTSTRAP, REACT, Etc.
                    </p>
                </div>

                <div class="learn-more-btn">
                    <a href="">HTML Learn</a>
                    <a href="">CSS Learn</a>
                    <a href="">JAVASCRIPT Learn</a>
                </div>


                <div style="background-color: #1f2f21;">
                    <p class="text-light">Back-end Development Language: PHP, MYSQL LARAVEL.</p>
                </div>

                <div class="learn-more-btn">
                    <a href="">PHP Learn</a>
                    <a href="">MYSQL Learn</a>
                    <a href="">LARAVEL Learn</a>
                </div>

                <div class="logo-codezara">
                    <img src="{{asset('asset/image/codezara-logo-codezara.png')}}" alt="codezara" class="img-fluid">
                </div>


            </div>

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


        </div>


        <script src="{{asset('asset/js/index.js')}}"></script>

    </body>

</html>