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
                        <header><h1>News</h1></header>
                        <article class="blog-detail">
                            <header class="blog-detail-header">
                                <img src="/storage/img/{{$news->image}}">
                                <br>
                                <h2>{{$news->title}}</h2>
                                <div class="blog-detail-meta">
                                    <span class="date"><span class="fa fa-file-o"></span>08-24-2014</span>
                                    <span class="author"><span class="fa fa-user"></span></span>
                                    <span class="comments"><span class="fa fa-comment-o"></span></span>
                                </div>
                            </header>
                            <hr>
                            <p>{!! $news->body !!}</p>
                        
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
                            <h2>Related News</h2>
                        </header>
                        <div class="section-content">
                            @foreach($all_news as $all_news)
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="{{$all_news->id}}">{{$all_news->title}}</a></header>
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