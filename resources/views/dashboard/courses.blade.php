@include('dashboard/header')



<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card m-5">

                <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive ">
                <td><a href="{{url('/dashboard/courses/addcourse')}}" class="btn btn-default">Add</a></td>

                <table class="table table-hover text-wrap pt-5">

                <thead >
                    <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Img</th>
                    <th>Year</th>
                    <th>Update</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($course as $c)

                    <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->description}}</td>
                    <td><img class="w-25 image-fluid" src="{{asset('img/'. $c->image_path)}}" alt="asrfaf"></td>
                    <td>{{$c->year_id}}</td>
                    <td><a href="{{url('/dashboard/courses/updatecourse/'. $c->id)}}" class="btn btn-default">update</a></td>
                    <td><a href={{"delete/". $c->id}} class="btn btn-danger">delete</a></td>
                    </tr>

                    @endforeach

                </tbody>
                </table>
                </div>
</div>

        </div>
        </div>
    </div>
    </section>

</div>



@include('dashboard/footer')
