<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <form action="{{url('postcourse')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
        <label for="exampleFormControlInput1">Course name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Insert course name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Course description</label>
            <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Insert course description">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Img</label>
            <input type="file" name="image" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Select year</label>
        <select class="form-control" name="year_id" id="exampleFormControlSelect1">

            @foreach ($course as $c)

            <option>{{$c->name}}</option>

            @endforeach

        </select>
        </div>
        <input type="submit" class="btn btn-danger">

    </form>


</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
