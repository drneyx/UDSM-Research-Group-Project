@extends('Frontend.main')
@section('contents')
<!-- Page Content -->
<div id="page-content">
    <div class="container" style="padding-top: 60px">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-10">
                <div id="page-main">
                    <section class="events images" id="events">
                        <center><header><h1>Research</h1></header></center>
                        <div class="section-content">
                            @foreach($research as $research)
                            
                            <article class="event">
                                <div class="event-thumbnail">
                                    <figure class="event-image">
                                        <div class="image-wrapper"><img src="/storage/img/{{$research->image}}"></div>
                                    </figure>
                                    @if($research->status == "Current")
                                    <figure class="date">
                                        <div class="day">New</div>
                                    </figure>
                                    @else
                                    <figure class="date">
                                        <div class="day">18</div>
                                    </figure>
                                    @endif
                                    
                                </div>
                                <aside>
                                    <header>
                                        <a href="single_research/{{$research->id}}">{{$research->title}}</a>
                                    </header>
                                    <div class="additional-info"><span class="fa fa-map-marker"></span> Matthaei Botanical Gardens</div>
                                    <div class="description">
                                        <p>{!! substr($research->body , 0, 100) !!} {{ strlen(strip_tags($research->body)) > 100 ? '...' : '' }}</p>
                                    </div>
                                    <a href="single_research/{{$research->id}}" class="btn btn-framed btn-color-grey btn-small">View Details</a>
                                </aside>
                            </article><!-- /.event -->
                            @endforeach

                        </div><!-- /.section-content -->
                    </section><!-- /.events-images -->
                    <div class="center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul><!-- /.pagination -->
                    </div><!-- /.center -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection