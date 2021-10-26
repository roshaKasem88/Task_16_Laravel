<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="http://localhost/week3/OOP_Task/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

<body>

<!-- Display Errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
                    <form action=" {{ url('/save') }}" method="post"
                        enctype="multipart/form-data">
@csrf
<!-- <input type="hidden" name="_token" value="<?php echo csrf_token();?>"> -->

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName"
                                aria-describedby="" value="{{old('name')}}">
                        </div>


                   

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <textarea name="email" class="form-control" >{{old('email')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <textarea name="password"  type="password" class="form-control" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea name="address" class="form-control" >{{old('address')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">LinkedIn</label>
                            <textarea name="linkedin" class="form-control" >{{old('linkedin')}}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="radio"  name="gender" value="male">
                            <label for="male">Male</label><br>
                            <input type="radio"  name="gender" value="female">
                            <label for="female">Female</label><br>
                        </div>

                         


                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
</body>
</html>

