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
            @include('components.admin.header')

            <div class="body">

                <h1 class="white">Catagory page</h1>

            </div>

            @include('components.admin.footer')


        </div>



        <script src="dashboard/js/main.js"></script>
    </body>

</html>