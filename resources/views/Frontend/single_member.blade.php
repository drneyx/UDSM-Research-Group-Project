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
                        <header><h1>More info</h1></header>
                        <article class="blog-detail">
                            <header class="blog-detail-header">
                                <img src="/storage/img/{{$single_member->image}}">
                                <br>
                                <h2>{{$single_member->name}}</h2>
                                <div class="blog-detail-meta">
                                    <span class="date"><span class="fa fa-file-o"></span>{{$single_member->title}}</span>
                                    <span class="author"><span class="fa fa-user"></span></span>
                                    <span class="comments"><span class="fa fa-comment-o"></span></span>
                                </div>
                            </header>
                            <hr>
                            <h2>{!! $single_member->body !!}</h2>
                        
                        </article>
                    </section><!-- /.blog-detail -->
                    <hr>

                   
                   
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

         
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection