@extends('Frontend.main')
@section('contents')
<!-- Page Content -->
<div id="page-content">
    <div class="container" style="padding-top: 40px">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="blog-detail">
                        <center><header><h1>Research Group Activity</h1></header></center>
                        <article class="blog-detail">
                            <header class="blog-detail-header">
                                <img src="/storage/img/{{$single_activity->image}}">
                                <br>
                                <h2>{{$single_activity->name}}</h2>
                                <div class="blog-detail-meta">
                                    <span class="date"><span class="fa fa-file-o"></span>08-24-2014</span>
                                    <span class="author"><span class="fa fa-user"></span></span>
                                    <span class="comments"><span class="fa fa-comment-o"></span></span>
                                </div>
                            </header>
                            <hr>
                            <p>{!! $single_activity->body !!}</p>
                        
                        </article>
                    </section><!-- /.blog-detail -->
                    <hr>

                   
                   
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Related activities</h2>
                        </header>
                        <div class="section-content">
                            @foreach($activities as $activities)
                            <article>
                                {{-- <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure> --}}
                                <header><a href="{{$activities->id}}">{{$activities->name}}</a></header>
                            </article><!-- /article -->
                            @endforeach
                           
                        </div><!-- /.section-content -->
                        {{-- <a href="" class="read-more">All News</a> --}}
                    </aside><!-- /.news-small -->
                  
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection