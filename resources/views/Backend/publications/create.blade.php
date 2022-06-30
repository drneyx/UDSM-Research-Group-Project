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
                <h5>Adding new publications</h5>
            </div>
            <div class="ibox-content">
            {!! Form::open(['action' => 'PublicationsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('author', 'Author')}}
                {{Form::text('author', '', ['class' => 'form-control'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('link', 'Link to Journey')}}
                {{Form::text('link', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('Abstract', 'Abstract')}}
                {{Form::textarea('abstract', '', ['class' => 'myContents2', 'placeholder'=> 'Abstract'])}}
            </div>


            <div class="form-group">
                {{Form::label('image', 'Image')}}
                {{Form::file('image')}}
            </div>

            <div class="form-group">
                {{Form::label('file', 'File/PDF')}}
                {{Form::file('file')}}
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
            function myFileBrowser (field_name, url, type, win) {

            // alert("Field_Name: " + field_name + "nURL: " + url + "nType: " + type + "nWin: " + win); // debug/testing

            /* If you work with sessions in PHP and your client doesn't accept cookies you might need to carry
            the session name and session ID in the request string (can look like this: "?PHPSESSID=88p0n70s9dsknra96qhuk6etm5").
            These lines of code extract the necessary parameters and add them back to the filebrowser URL again. */

            var cmsURL = window.location.toString();    // script URL - use an absolute path!
            if (cmsURL.indexOf("?") < 0) {
                //add the type as the only query parameter
                cmsURL = cmsURL + "?type=" + type;
            }
            else {
                //add the type as an additional query parameter
                // (PHP session ID is now included if there is one at all)
                cmsURL = cmsURL + "&type=" + type;
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'My File Browser',
                width : 420,  // Your dimensions may differ - toy around with them!
                height : 400,
                resizable : "yes",
                inline : "yes",  // This parameter only has an effect if you use the inlinepopups plugin!
                close_previous : "no"
            }, {
                window : win,
                input : field_name
            });
            return false;
            }
        $(document).ready(function() {
            
                tinymce.init({
                    selector: ".myContents2",
                    // height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],

                    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
                    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,images, cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
                    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
                    theme_advanced_toolbar_location : "top",
                    theme_advanced_toolbar_align : "left",
                    theme_advanced_statusbar_location : "bottom",
                    theme_advanced_resizing : true,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                    menubar:false,

                    file_browser_callback : 'myFileBrowser'
                });

        });

    $(document).on('focusin', function(e) {
    if ($(e.target).closest(".tox-textfield").length)
        e.stopImmediatePropagation();
    });
    </script>
@endsection