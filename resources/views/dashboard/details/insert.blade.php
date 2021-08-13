@include('dashboard/header')

<div class="container-fluid">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="mx-auto col-6 m-4">
                <div class="card card-primary ">

                    <div class="card-header">
                        <h3 class="card-title">Add new material</h3>
                    </div>
                <form action="{{url('dashboard/courses/postinsert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('sweetalert::alert')
                    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Title</label>
                            <input type="text" name="name" id="inputName" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputProjectLeader">File</label>
                            <input type="file" name="file_path" id="inputProjectLeader" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputStatus">Type</label>
                            <select id="inputStatus" name="type"  class="form-control custom-select">
                                <option>materials</option>
                                <option>resources</option>
                                <option>testBank</option>
                                <option>books</option>
                            </select>
                        </div>

                        <div class="">
                            <input type="submit" value="Add" class="btn btn-success float-left">
                            <a href="{{url('dashboard/course/details/'.$course_id )}}" class="btn btn-secondary float-right">Show Materials</a>

                            {{-- <a href="#" class="btn btn-secondary float-right">Show Courses</a> --}}
                        </div>
                        <input type="hidden" name="course_id" value="{{$course_id}}">

                    </div>
                </form>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            </div>

        </section>

    </div>
</div>













@include('dashboard/footer')
