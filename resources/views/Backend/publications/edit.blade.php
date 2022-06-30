@extends('Backend.main.main')

@section('content')
<style>
    .tox-tinymce-aux {
           position: relative !important;
           z-index: 10055;
       }
    .tox-notification { 
        display: none !important 
            
        }
</style>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Edit publications</h5>
            </div>
            <div class="ibox-content">
            {!! Form::open(['action' => ['PublicationsController@update', $publications->id], 'method' => 'POST']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $publications->title, ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('author', 'Author')}}
                {{Form::text('author', $publications->author, ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('abstract', 'Link to Journer')}}
                {{Form::text('link',$publications->abstract,['class'=>'form-control']) }}
            </div> 

            <div class="form-group">
                {{Form::label('Abstract', 'Abstract')}}
                {{Form::textarea('abstract', $publications->link, ['class' => 'myContents2', 'placeholder'=> 'Bio'])}}
            </div>

            {{Form::hidden('_method', 'PUT')}}

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
             </div>
           </div>
         </div>
        </div>
    </div>
    <script src="{{ url('js/jquery-3.1.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            
                tinymce.init({
                    selector: ".myContents2",
                    // height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                    menubar:false,
                });

        });

    $(document).on('focusin', function(e) {
    if ($(e.target).closest(".tox-textfield").length)
        e.stopImmediatePropagation();
    });
    </script>
@endsection