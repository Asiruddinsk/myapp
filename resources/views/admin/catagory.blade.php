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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    </head>

    <body>
        <div class="main">
            @include('components.admin.header')

            <div class="body">

                <h1 class="py-1 px-1">Add Catagory</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-12">
                            <form action="" method="post">
                                <input type="text" class="form-control" name="catagory" placeholder="add catagory">
                            </form>
                        </div>
                        <div class="col-xl-6 col-md-6 col-12">
                            <h1>show catagory</h1>
                        </div>
                    </div>
                </div>

            </div>

            @include('components.admin.footer')


        </div>



        <script src="asset/dashboard/js/main.js"></script>
    </body>

</html>