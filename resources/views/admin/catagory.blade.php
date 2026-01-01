<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="dashboard design">
        <meta name="keywords" content="codezara dashboard">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Catagory</title>

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
                            <h1 class="py-1 px-1">Add Catagory</h1>
                            <form action="{{ url('/add-catagory') }}" method="post">
                                @csrf
                                <div class="">
                                    <input type="text" class="form-control" name="catagory" placeholder="add catagory">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-md-6 col-12">
                            <h1>show catagory</h1>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Id</th>
                                            <th>Catagory add</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        @foreach ($data as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->catagory}}</td>
                                            <td>
                                                <a href="{{url('edit',$data->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{url('delete',$data->id)}}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @include('components.admin.footer')


        </div>



        <script src="asset/dashboard/js/main.js"></script>
    </body>

</html>