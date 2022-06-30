@extends('Frontend.main')
@section('contents')

<div id="page-content">
    <section id="featured-courses" style="padding-top: 60px">
        <div class="block">
            <div class="container">
               <center> <header><h2>Research Group activities</h2></header></center>
                <div class="row">
                    @foreach($activities as $activities)
                        
                    <div class="col-md-3 col-sm-3">
                        <article class="featured-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="single_activity/{{$activities->id}}"><img src="/storage/img/{{$activities->image}}"></a></div>
                            </figure>
                            <div class="description">
                                <a href="single_activity/{{$activities->id}}"><h3>{{$activities->name}} </h3></a>
                                {{-- <a href="#" class="course-category">{!! substr($activities->body , 0, 100) !!} {{ strlen(strip_tags($activities->body)) > 100 ? '...' : '' }}</a> --}}
                                <hr>
                               
                            </div>
                        </article><!-- /.featured-course -->
                    </div><!-- /.col-md-3 -->
                    @endforeach
                </div><!-- /.row -->

                
            </div><!-- /.container -->
            <div class="background background-color-grey-background"></div>
        </div><!-- /.block -->
    </section>
    <!-- /#featured-courses -->



</div>
<!-- end Page Content -->
@endsection