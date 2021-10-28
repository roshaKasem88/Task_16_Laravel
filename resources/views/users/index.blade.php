

<!DOCTYPE html>
<html>

<head>
    <title>TODO List Task - Read Tasks - </title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1>Read Task Details </h1>
            <br>


            {{ session()->get('Message') }}


            <br>
             <a href='{{ url('/LogOut') }}' class='btn btn-primary m-r-1em'>LogOut</a>


            <!-- <a href="logout.php"></a> -->



        </div>

        <!-- PHP code to read records will be here -->



        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>

                <th>action</th>
            </tr>


   
        @foreach ($data as  $value)
                  
            <tr> 
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->start_date }}</td>
                <td>{{ $value->end_date }}</td>

                <td>
                    <a href='{{ url('/Remove/'.$value->id) }}' class='btn btn-danger m-r-1em'>Delete</a>
                    <a href='{{ url('/Edit/'.$value->id) }}' class='btn btn-primary m-r-1em'>Edit</a>
                </td>

            </tr>

      @endforeach

            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>
