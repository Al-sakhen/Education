@include('header')

<!-- End Header -->
<main id="main" data-aos="fade-up" class="flex-column min-vh-100">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <ol>
            <li><a href="{{url('/index')}}"> الرئيسية </a></li>
            <li><a href="{{url('inner')}}"> مواد السنة الدراسية الاولى</a></li>
            <li>وصف المادة</li>
        </ol>
        <h2>C++ Programming</h2>
        </div>

    </div>
    </section><!-- Breadcrumbs Section -->


    <!-- ======= Portfolio Details Section ======= -->
<section class="desc">
<<<<<<< HEAD
||||||| 90c88fc
    <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
<<<<<<< HEAD
                    {{-- <div class="career-search mb-60">
                        <div class="filter-result">
=======
                    <!-- <div class="career-search mb-60"> -->
                        <!-- <div class="filter-result"> -->
>>>>>>> a95437b85ea47670d66a112cb8e81cdbc7dd7b0f
                            <!-- <p class="mb-30 ff-montserrat">Total Job Openings : 89</p> -->
                        <!-- @foreach ($details as $d)

                        <div class="job-box d-md-flex align-items-center justify-content-center mb-25">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0  d-lg-flex">
                                    <img class="w-75" src="{{asset('assets/img/desc/folder1.svg')}}" alt="" srcset="">

                                    </div>
                                    <div class="job-content">

                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans  justify-content-between">
                                            <h5 class="text-center text-md-left mt-4">{{$d->name}}</h5>

                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="{{url('download/'.$d->file_path)}}" class="btn d-block w-100 d-sm-inline-block btn-light">تحميل</a>
                                </div>
                        </div>
                @endforeach -->
=======


     <div class="col-lg-12">

              <div class="box-menu dmne-tab-inner text-center">
                <ul class="">
                  <li class="mixitup-control-active nav-link active" data-filter=".all">كل المواد</li>
                  <li  data-filter=".materials1">ملخصات</li>
                  <li  data-filter=".testBank">اسئلة سنوات</li>
                  <li  data-filter=".tests">تفريغات</li>
                  </ul>
                </div>
        </div>

    <div class="container box-mix">
        <div class="row">




                <div class="col-lg-3 mix testBank all">
                    <div class="materials">
                        <a href="" class="card education">
                        <div class="circle">
                            <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
                        </div>
                        <p>CH1</p>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 mix tests all">
                    <div class="materials">
                        <a href="" class="card education">
                        <div class="circle">
                            <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
                        </div>
                        <p>CH1</p>
                        </a>
                    </div>
                </div>


<<<<<<< HEAD
                <div class="col-lg-3 mix tests all">
                    <div class="materials">
                        <a href="" class="card education">
                        <div class="circle">
                            <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
=======
            <div class="row">
                <div class="col-lg-6 ">

              

                    <!-- <div class="career-search mb-60"> -->
                        <!-- <div class="filter-result"> -->

                            <!-- <p class="mb-30 ff-montserrat">Total Job Openings : 89</p> -->
                        <!-- @foreach ($details as $d)

                        <div class="job-box d-md-flex align-items-center justify-content-center mb-25">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0  d-lg-flex">
                                    <img class="w-75" src="{{asset('assets/img/desc/folder1.svg')}}" alt="" srcset="">

                                    </div>
                                    <div class="job-content">

                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans  justify-content-between">
                                            <h5 class="text-center text-md-left mt-4">{{$d->name}}</h5>

                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="{{url('download/'.$d->file_path)}}" class="btn d-block w-100 d-sm-inline-block btn-light">تحميل</a>
                                </div>
>>>>>>> 115fb21081f96aee276b48160231038625a9035d
                        </div>
                        <p>CH1</p>
                        </a>
                    </div>
                </div>

>>>>>>> 313e96b3adddd305d10911c1de8bbbe3a216f8bd


    <div class="col-lg-12">
        <div class="box-menu dmne-tab-inner text-center">
            <ul class="">
                <li class="mixitup-control-active nav-link " data-filter=".materials">المواد</li>
                <li  data-filter=".resources">ملخصات</li>
                <li  data-filter=".testBank">اسئلة سنوات</li>
                <li  data-filter=".books">كتب</li>
            </ul>
        </div>
    </div>

    <div class="container box-mix">
        <div class="row">
                @foreach ($details as $d)

<<<<<<< HEAD
                    <div class="col-lg-3 col-md-4 mix {{$d->type}}">
                        <a href="{{url('download/'.$d->file_path)}}" class="card education">
                        <div class="circle">
                            <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
||||||| 90c88fc
=======

            <div class="col-lg-3 mix testBank all">
                    <div class="materials">
                        <a href="" class="card education">
                        <div class="circle">
                            <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
>>>>>>> 313e96b3adddd305d10911c1de8bbbe3a216f8bd
                        </div>
<<<<<<< HEAD
                        <p>{{$d->name}}</p>
                        </a>
                    </div>
||||||| 90c88fc
                    </div> --}}
=======
<<<<<<< HEAD
                        <p>CH1</p>
                        </a>
=======

>>>>>>> 115fb21081f96aee276b48160231038625a9035d
                    </div>

                    
>>>>>>> 313e96b3adddd305d10911c1de8bbbe3a216f8bd

            @endforeach


<<<<<<< HEAD

||||||| 90c88fc
                </div>
                <div class="col-lg-6">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLCInYL3l2AajFAiw4s1U4QbGszcQ-rAb3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>
            </div>
        </div>
</section>

    </section>
=======
                </div>
                <div class="col-lg-6">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLCInYL3l2AajFAiw4s1U4QbGszcQ-rAb3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
>>>>>>> 313e96b3adddd305d10911c1de8bbbe3a216f8bd

<<<<<<< HEAD
||||||| 90c88fc
    <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                                                    <div class="frame">
	            <div class="center">
		<div class="title">
			<h1>C++ Book</h1>
		</div>

		<div class="dropzone">
			<!-- <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" /> -->
            <i class="fas fa-cloud-download-alt upload-icon upload-input"></i>
			<!-- <input type="file" class="upload-input" /> -->
		</div>

		<button type="button" class="btn" name="uploadbutton">Download file</button>

	</div>
</div>
=======
                </div>
        <!-- url('download/'.$d->file_path) -->
        <!-- $d->name -->
    </div>
</div>
>>>>>>> 313e96b3adddd305d10911c1de8bbbe3a216f8bd

<<<<<<< HEAD





        <!-- url('download/'.$d->file_path) -->
        <!-- $d->name -->
    </div>
</div>

</section>
||||||| 90c88fc
                        </div>
                    </div>
    </div>
=======
</section>
>>>>>>> 313e96b3adddd305d10911c1de8bbbe3a216f8bd
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('footer')
