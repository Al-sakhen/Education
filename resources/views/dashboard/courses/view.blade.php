@include('dashboard/header')



<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card m-5">
                @include('sweetalert::alert')
                @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

                <div class="card-header">
                <h3 class="card-title">Courses</h3>
                <td><a href="{{url('/dashboard/courses/addcourse')}}" class="btn btn-info float-right">Add new course</a></td>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive ">

                <table class="table table-hover text-wrap pt-5">

                <thead >
                    <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Img</th>
                    <th>Year</th>
                    <th>Methods</th>

                    <th>Materials</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($course as $c)


                    <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->description}}</td>
                    <td><img class="image-fluid" style="width: 3.5rem" src="{{asset('img/'. $c->image_path)}}" alt="asrfaf"></td>
                    <td>{{$c->year_id}}</td>
                    <td><a href="{{url('/dashboard/courses/updatecourse/'. $c->id)}}" ><img style="width: 2.5rem" src="{{asset('assets/img/edit.svg')}}"/></a>
                    <a href={{url('dashboard/delete/'.$c->id) }}><img  style="width: 2.5rem" src="{{asset('assets/img/banned.svg')}}"></a></td>
                    <td><a href='{{url('/dashboard/cousrse/add/'.$c->id)}}' ><img style="width: 2.5rem" src="{{asset('assets/img/add.svg')}}"/></a> <a href="{{url('/dashboard/course/details/'.$c->id)}}" ><img style="width: 2.5rem" src="{{asset('assets/img/file.svg')}}"/></a></td>

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
