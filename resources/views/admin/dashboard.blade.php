<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="dashboard design">
        <meta name="keywords" content="codezara dashboard">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" media="(max-width:600px)" href="{{('asset/dashboard/css/mobile.css')}}">
        <link rel="stylesheet" media="(min-width:600px)" href="{{('asset/dashboard/css/desktop.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div class="main">
            <header>

                <div class="flex">
                    <div class="logo-div">
                        <img src="{{('asset/dashboard/image/codezara-logo-codezara.png')}}" width="50" height="50"
                            class="ibr">
                    </div>
                    <div class="">
                        <button onclick="openNavbarFunction()" class="bar-btn">&#9776;</button>
                        <a href="dashboard.html" class="white">Dashboard</a>
                    </div>
                </div>

                <div class="nav" id="myNav">
                    <a href="index.html">
                        <div class="side-link">
                            <i class="fa fa-home"></i>
                            <span>Home</span>

                        </div>
                    </a>
                    <a href="category.html">
                        <div class="side-link">
                            <i class="fa fa-list-alt"></i>
                            <span>Catagory</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-photo"></i>
                            <span>Post</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-list"></i>
                            <span>Subcatagory</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fas fa-image"></i>
                            <span>Image</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fas fa-video"></i>
                            <span>Video</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-briefcase"></i>
                            <span>Product</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-link"></i>
                            <span>Link</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-header"></i>
                            <span>Title</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fas fa-paragraph"></i>
                            <span>Paragraph</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-info-circle"></i>
                            <span>Product info</span>

                        </div>
                    </a>
                    <a href="">
                        <div class="side-link">
                            <i class="fa fa-file-pdf-o"></i>
                            <span>File Pdf</span>

                        </div>
                    </a>



                </div>

                <div class="flex">
                    <div class="">
                        <a href="" class="cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-number">0</span>
                        </a>
                    </div>
                    <div class="center-d">
                        <img src="{{('asset/dashboard/image/Im.jpg')}}" width="50" height="50" class="ibr">
                    </div>
                </div>

            </header>

            <div class="body">

                <div class="white center-d mt mb">
                    <a href="" class="div">
                        <div class="">
                            <i class="fas fa-home" style="font-size:48px;color:rgb(109, 106, 106)"></i>
                            <span>Home</span>
                        </div>
                    </a>
                    <a href="" class="div">
                        <div class="">
                            <i class="fas fa-video" style="font-size:48px;color:rgb(109, 106, 106)"></i>
                            <span>Video</span>
                        </div>
                    </a>
                    <a href="" class="div">
                        <div class="">
                            <i class="fas fa-image" style="font-size:48px;color:rgb(76, 90, 128)"></i>
                            <span>Image</span>
                        </div>
                    </a>
                    <a href="" class="div">
                        <div class="">
                            <i class="fa fa-youtube-play" style="font-size:48px;color:red"></i>
                            <span>Youtube</span>
                        </div>
                    </a>

                    <a href="https://www.facebook.com/asiruddin.sk.96930" class="div">
                        <div class="">
                            <i class="fa fa-facebook-f" style="font-size:48px;color:rgb(47, 102, 116)"></i>
                            <span>facebook</span>
                        </div>
                    </a>

                    <a href="" class="div">
                        <div class="">
                            <i class="fa fa-twitter
            " style="font-size:48px;color:rgb(0, 204, 255)"></i>
                            <span>Twitter</span>
                        </div>
                    </a>

                    <a href="" class="div">
                        <div class="">
                            <i class="fa fa-instagram" style="font-size:48px;color:rgb(255, 0, 179)"></i>
                            <span>instagram</span>
                        </div>
                    </a>

                    <a href="" class="div">
                        <div class="">
                            <i class="fa fa-linkedin" style="font-size:48px;color:rgb(33, 52, 105)"></i>
                            <span>Linkedin</span>
                        </div>
                    </a>



                </div>

            </div>


            <div class="footer">
                <p class="white center">Footer</p>

            </div>

        </div>



        <script src="dashboard/js/main.js"></script>
    </body>

</html>