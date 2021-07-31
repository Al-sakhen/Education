@include('dashboard/header')

<div class="container">

    <div class="content-wrapper">

        <section class="content">
            <div class="row">
            <div class="mx-auto col-6 m-4">
                <div class="card card-primary ">

                    <div class="card-header">
                        <h3 class="card-title">Add new course</h3>
                    </div>
                <form action="{{url('dashboard/courses/updatecourse2')}}" method="POST" enctype="multipart/form-data">
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

                    @foreach ($data as $d)
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Course Name</label>
                            <input type="text" name="name" value="{{$d->name}}"  id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Course Description</label>
                            <input type="text" name="description" value="{{$d->description}}"  id="inputDescription" class="form-control">
                        </div>
                        <img src="{{asset('img/'.$d->image_path)}}" class="w-25" alt="">
                        <div class="form-group">
                            <label for="inputProjectLeader">Course Img</label>
                            <input type="file" name="image" value="{{asset('img/'.$d->image_path)}}" id="inputProjectLeader" class="form-control">
                            </div>
                        <div class="form-group">
                        <label for="inputStatus">Year</label>
                        <select id="inputStatus" name="year_id"  class="form-control custom-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>

                        </select>
                        </div>
                        <div class="">
                            <input type="submit" value="Update Course" class="btn btn-success float-left">
                            <a href="{{url('dashboard/FirstYear')}}" class="btn btn-secondary float-right">Show Courses</a>
                            <input type="hidden" name="id" value="{{$d->id}}">

                        </div>

                    </div>
                    @endforeach
                </form>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            </div>

        </section>

    </div>
</div>

@include('dashboard/footer');
