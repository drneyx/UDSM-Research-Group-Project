@extends('Frontend.main')
@section('contents')
<!-- Page Content -->
<div id="page-content">
    <div class="container" style="padding-top: 60px">
                <div id="page-main">
                    <section class="blog-listing" id="blog-listing">
                        <center><header><h1>Publications</h1></header></center>
                        <div class="row">
                            @foreach($publication as $publication)
                                
                            <div class="col-md-6 col-sm-6">
                                <article class="blog-listing-post">
                                    <figure class="blog-thumbnail">
                                        <figure class="blog-meta"><span class="fa fa-file-text-o"></span>08-24-2014</figure>
                                        <div class="image-wrapper"><a href="single_publication/{{$publication->id}}"><img src="/storage/img/{{$publication->image}}"></a></div>
                                    </figure>
                                    <aside>
                                        <header>
                                            <a href="blog-detail.html"><h3>{{$publication->title}}</h3></a>
                                        </header>
                                        <div class="description">
                                            <p>{!! substr($publication->link , 0, 100) !!} {{ strlen(strip_tags($publication->link)) > 100 ? '...' : '' }}</p>
                                        </div>
                                        <a href="single_publication/{{$publication->id}}" class="read-more stick-to-bottom">Read More</a>
                                    </aside>
                                </article><!-- /article -->
                            </div><!-- /.col-md-6 -->
                            @endforeach
                         
                        </div><!-- /.row -->

                
                    </section><!-- /.blog-listing -->
                
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection