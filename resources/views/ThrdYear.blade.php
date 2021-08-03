
@include('header')
<!-- End Header -->

<main id="main" data-aos="fade-up" >

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
<div class="container">
    <div class="d-flex justify-content-between align-items-right">
    <ol>
        <li><a href="{{url('/index')}}">الرئيسية</a></li>
        <li> مواد السنة الدراسية الثالثة</li>
    </ol>
    <h2>العام الدراسي الثالث</h2>
    </div>
</div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
<div class="container">

    <!-- Please Copy Area Start -->
<div class="team-boxed">
    <div class="container">
        <div class="row people">

            @foreach ($course as $c)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 float-left">
                <div class="wt-categorycontent">
                    <figure><img src="{{asset('img/'. $c->image_path)}}" alt="image description"></figure>
                        <div class="wt-cattitle">
                            <h3><a href="{{url('subject',['id'=>$c->id])}}">{{$c->name}}</a></h3>
                        </div>
                        <div class="wt-categoryslidup">
                            <p>{{$c->description}}</p>
                                <a href="{{url('subject',['id'=>$c->id])}}">Explore <i class="fa fa-arrow-right"></i></a>
                        </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
</main>
@include('footer')
