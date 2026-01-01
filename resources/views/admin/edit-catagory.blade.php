<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="dashboard design">
        <meta name="keywords" content="codezara dashboard">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Catagory</title>

        @include('components.admin.css-link')

    </head>

    <body>
        <div class="main">
            @include('components.admin.header')

            <div class="body">
                @include('sweetalert::alert')
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-12">
                            <h1 class="py-1 px-1">Edit Catagory</h1>
                            <form action="{{ url('/edit-catagory',$data->id) }}" method="post">
                                @csrf
                                <div class="">
                                    <input type="text" class="form-control" name="catagory" placeholder="add catagory"
                                        value="{{$data->catagory}}">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

            @include('components.admin.footer')


        </div>



        <script src="asset/dashboard/js/main.js"></script>
    </body>

</html>