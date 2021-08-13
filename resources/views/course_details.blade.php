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

                    <div class="col-lg-3 col-md-4 mix {{$d->type}}">
                        <a href="{{url('download/'.$d->file_path)}}" class="card education">
                        <div class="circle">
                            <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
                        </div>
                        <p>{{$d->name}}</p>
                        </a>
                    </div>

            @endforeach










        <!-- url('download/'.$d->file_path) -->
        <!-- $d->name -->
    </div>
</div>

</section>
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('footer')
