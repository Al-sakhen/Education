@include('dashboard/header')

<div class="container-fluid">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="mx-auto col-6 m-4">
                <div class="card card-primary ">

                    <div class="card-header">
                        <h3 class="card-title">Add new course</h3>
                    </div>
                <form action="{{url('dashboard/courses/postcourse')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="inputName">Course Name</label>
                            <input type="text" name="name" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Course Description</label>
                            <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">Course Img</label>
                            <input type="file" name="image" id="inputProjectLeader" class="form-control">
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
                            <input type="submit" value="Add Course" class="btn btn-success float-left">
                            <a href="{{url('dashboard')}}" class="btn btn-secondary float-right">Show Courses</a>
                        </div>

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
