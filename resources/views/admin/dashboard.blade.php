<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="dashboard design">
        <meta name="keywords" content="codezara dashboard">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        @include('components.admin.css-link')

    </head>

    <body>
        <div class="main">
            @include('components.admin.header')

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

            @include('components.admin.footer')


        </div>



        <script src="asset/dashboard/js/main.js"></script>
    </body>

</html>