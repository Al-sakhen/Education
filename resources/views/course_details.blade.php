@include('header')

<!-- End Header -->
<main id="main" data-aos="fade-up" style="height: 100vh;">
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

    <div class="dmne-tab-inner text-center">
                <ul class="nav nav-tabs" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-1" data-toggle="pill" href="#ex1-tabs-1" role="tab" aria-controls="pills-1" aria-selected="false">All Categories </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-2" data-toggle="pill" href="#ex1-tabs-2" role="tab" aria-controls="pills-2" aria-selected="false">Animation</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-3" data-toggle="pill" href="#ex1-tabs-3" role="tab" aria-controls="pills-3" aria-selected="false">Design</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-4" data-toggle="pill" href="#ex1-tabs-4" role="tab" aria-controls="pills-4" aria-selected="false">Illustration</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-5" data-toggle="pill" href="#ex1-tabs-5" role="tab" aria-controls="pills-5" aria-selected="false">Lifestyle</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-6" data-toggle="pill" href="#ex1-tabs-6" role="tab" aria-controls="pills-6" aria-selected="false">Lifestyle</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex1-tab-7" data-toggle="pill" href="#ex1-tabs-7" role="tab" aria-controls="pills-7" aria-selected="true">Business</a>
                    </li>
                </ul>
            </div>



    <!-- ======= Portfolio Details Section ======= -->
<section class="desc">
    <div class="container">
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
                        </div>
                @endforeach -->



                        </div>
                    </div> --}}




                </div>
                <div class="col-lg-6">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLCInYL3l2AajFAiw4s1U4QbGszcQ-rAb3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>
            </div>
        </div>
</section>

    </section>

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

                        </div>
                    </div>
    </div>
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('footer')
