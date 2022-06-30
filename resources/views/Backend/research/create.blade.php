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
        <div class="col-lg-10">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Adding new research</h5>
            </div>
            <div class="ibox-content">
            {!! Form::open(['action' => 'ResearchController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('status', 'Status')}}
                {!! Form::select('status',['Current' => 'Current','Previous'=>'Previous',],'select',['class'=>'form-control','placeholder'=>'Select status']) !!}
            </div> 

            <div class="form-group">
                {{Form::label('members', 'Members')}}
                {{Form::textarea('members', '', ['class' => 'myContents2', 'placeholder'=> 'Bio'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Description')}}
                {{Form::textarea('body', '', ['class' => 'myContents2'])}}
            </div>

            <div class="form-group">
                {{Form::label('image', 'Image')}}
                {{Form::file('image')}}
            </div>

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