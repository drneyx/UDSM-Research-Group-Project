@extends('Frontend.main')
@section('contents')
<!-- Page Content -->
<div id="page-content">
    <section id="featured-courses" style="padding-top: 60px">
        <div class="block">
            <div class="container">
                <header><h2>Group Members</h2></header>
                <div class="row">

                    @foreach($members as $members)
                    @if($members->position == "Researcher")
                    <div class="col-md-3 col-sm-3">
                        <article class="featured-course">
                            <figure class="image">
                                <div class="image-wrapper"><a href="single_member/{{$members->id}}"><img src="/storage/img/{{$members->image}}"></a></div>
                            </figure>
                            <div class="description">
                                <a href="#"><h3>{{$members->name}}</h3></a>
                                <a href="#" class="course-category">{{$members->position}}</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>Position</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>{{$members->position}}</span>
                                </div>
                                <div class="stick-to-bottom"><a href="single_member/{{$members->id}}" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.featured-course -->
                    </div><!-- /.col-md-3 -->
                    @endif
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