@include('dashboard/header')

<div class="container">

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                <form action="{{url('/dashboard/courses/updatecourse3')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($data as $d)

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Course name</label>
                    <input type="text" name="name" class="form-control" value="{{$d->name}}" id="exampleFormControlInput1" placeholder="Insert course name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Course description</label>
                        <input type="text" name="description" class="form-control" value="{{$d->description}}" id="exampleFormControlInput1" placeholder="Insert course description">
                    </div>
                    <img src="{{asset('img/'.$d->image_path)}}" class="w-25" alt="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Img</label>
                        <input type="file" name="image" value="{{asset('img/'.$d->image_path)}}" class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Select year</label>
                    <select class="form-control" name="year_id" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                    </div>
                    <input type="submit" class="btn btn-danger">
                    <input type="hidden" name="id" value="{{$d->id}}">

                    @endforeach

                </form>

            </div>
            </div>
        </div>
        </section>

    </div>
</div>

@include('dashboard/footer');
