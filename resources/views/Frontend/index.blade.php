@extends('Frontend.main')
@section('contents')

<!-- Homepage Slider -->
<section id="homepage-slider">
    <div class="flexslider">
        <ul class="slides">
            <li class="slide">
                <figure>
                    <div class="slide-wrapper">
                        <div class="inner">
                            <div class="container">
                                <h2>ISDI Research Group </h2>
                                <h1>INFORMATION SYSTEMS </h1>
                                <div><a href="course-detail-v1.html" class="btn">wellcome</a></div>
                            </div>
                        </div><!-- /.inner -->
                    </div><!-- /.wrapper -->
                </figure>
                <img src="{{asset('img/landing-page-background.jpg')}}">
            </li>
            <li class="slide">
                <figure>
                    <div class="slide-wrapper">
                        <div class="inner">
                            <div class="container">
                                <h2>ISDI Research Group</h2>
                                <h1>DIGITAL INNOVATIONS</h1>
                                <div><a href="online_registration/" class="btn">abstract submission</a></div>
                            </div>
                        </div><!-- /.inner -->
                    </div><!-- /.wrapper -->
                </figure>
                <img src="{{asset('img/slider-slide-02.jpg')}}">
            </li>
        </ul>
    </div>
</section>
<!-- end Homepage Slider -->

<!-- Page Content -->
<div id="page-content">
    <section id="course-detail">
        <div class="block">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6">
                       <div class="course-info">
                        
                        
                           <img style="width: 500px; height:250px" src="{{asset('img/IMG_6654.JPG')}}" alt="">
                          
                       </div>
                       <br>
                       <a href="#" class="btn">wellcome to our research group</a>
                   </div>
                   <div class="col-md-6 col-sm-6">
                       <h3>About the Group</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit
                           non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae
                           aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.
                       </p>
                       <h3>Why to Join</h3>
                       <ul class="font-color-grey-medium">
                           <li>Programs and Areas</li>
                           <li>Research</li>
                           <li>Graduate & Postdoctoral Programs</li>
                           <li>Continuing Studies</li>
                       </ul>
                   </div>
                </div>
            </div>
            <div class="background background-color-grey-background"></div><!-- /.background -->
        </div>
    </section><!-- /#course-detail -->
    <!-- /#featured-courses -->

    <section id="latest-courses">
        <div class="block">
            <div class="container">
                <header><h2>News</h2></header>
                <div class="row">
                    @foreach($news as $news)
                    <a href="single_news/{{$news->id}}">
                    <div class="col-md-4">
                        
                        <div class="latest-course">
                            <figure class="image">
                                <div class="image-wrapper"><img src="/storage/img/{{$news->image}}"></div>
                            </figure>
                            <aside class="description">
                               <h4>{{$news->title}}</h4>
                                <!--<a href="#" class="course-category">Science</a>-->
                                <p>{!! substr($news->body , 0, 100) !!} {{ strlen(strip_tags($news->body)) > 100 ? '...' : '' }}</p>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>{{$news->created_at}}</span>
                                    {{-- <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span> --}}
                                </div>
                            </aside>
                            <hr>
                        </div>
                       <!-- /.latest-course -->
                    </div><!-- /.col-md-4 -->
                    </a>
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- /#latest-courses -->

    <!-- Testimonial -->
    <section id="testimonials">
        <div class="block">
            <div class="container">
                <div class="author-carousel">
                    <div class="author has-dark-background">
                        <blockquote>
                            <figure class="author-picture"><img src="{{asset('img/student-testimonial.jpg')}}" alt=""></figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                        Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                    <footer>Claire Doe</footer>
                                </div>
                            </article>
                        </blockquote>
                    </div><!-- /.author -->
                    <div class="author has-dark-background">
                        <blockquote>
                            <figure class="author-picture"><img src="{{asset('img/student-testimonial.jpg')}}" alt=""></figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                        Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                    <footer>Claire Doe</footer>
                                </div>
                            </article>
                        </blockquote>
                    </div><!-- /.author -->
                </div><!-- /.author-carousel -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- end Testimonial -->

    <!-- Partners, Become a Partner -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section id="partners">
                        <header>
                            <h2>Partners </h2>
                        </header>
                        <div class="section-content">
                            <div class="logos">
                                <div class="logo"><a href=""><img src="{{asset('img/logo-partner-01.png')}}" alt=""></a></div>
                                <div class="logo"><a href=""><img src="{{asset('img/logo-partner-02.png')}}" alt=""></a></div>
                                <div class="logo"><a href=""><img src="{{asset('img/logo-partner-03.png')}}" alt=""></a></div>
                                <div class="logo"><a href=""><img src="{{asset('img/logo-partner-04.png')}}" alt=""></a></div>
                                <div class="logo"><a href=""><img src="{{asset('img/logo-partner-05.png')}}" alt=""></a></div>
                            </div>
                        </div>
                    </section>
                </div><!-- /.col-md-9 -->
                
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Partners, Become a Partner -->

</div>
<!-- end Page Content -->
@endsection