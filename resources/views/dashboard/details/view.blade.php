
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


                <td><a href="{{url('/dashboard/cousrse/add/'.$course_id)}}" class="btn btn-info float-right">Add new material</a></td>

            </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive ">

                <table class="table table-hover text-wrap pt-5">

                <thead >
                    <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>File</th>
                    <th>Link</th>
                    <th>Course_id</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Methods</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($course_details as $c)
                    <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->type}}</td>
                    <td>{{$c->file_path}}</td>
                    <td>{{$c->link_text}}</td>
                    <td>{{$c->course_id}}</td>
                    <td>{{$c->created_at}}</td>
                    <td>{{$c->updated_at}}</td>
                    <td class="d-flex justify-content-around">

                        <a href='{{url('dashboard/detail/delete/'.$c->id)}}'><img  style="width: 2.5rem" src="{{asset('assets/img/banned.svg')}}"></a>
                        <a href="{{url('/dashboard/courses/updatecourse/'. $c->id)}}" ><img style="width: 2.5rem" src="{{asset('assets/img/edit.svg')}}"  style=""/></a></td>

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
