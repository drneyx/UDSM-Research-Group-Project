@extends('Backend.main.main')
@section('content')
<style>
    .img {
        width: 40px;
        height: 30px;
        cursor: pointer;
    }

    .img img {
        transition: 0.7s;
    }

    .img img:hover {
        transform: scale(1.11);
    }
    .position {
        display: none;
    }
</style>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Publications Management</h5>
                <div class="ibox-tools">
                    <a href="a_publications/create" class="btn btn-primary"> Add new</a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Author</th>
                <th>Title</th>
                <th>Link to Journey</th>
                <th>Abstract</th>
                <th>File/PDF</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($publications) > 0 )
              @foreach($publications as $publications)
              <tr class="gradeX">
                <td class="img">
                    <img src="/storage/img/{{$publications->image}}" class="w-100 h-100" style="object-fit: cover; object-position: 50% 0; height: 100%; width: 100%">
                </td>
                <td>{{$publications->author}}</td>
                <td>{{$publications->title}}</td>
                <td>{{$publications->abstract}}</td>
                <td>{!! substr($publications->link , 0, 50) !!} {{ strlen(strip_tags($publications->link)) > 50 ? '...' : '' }}</td>
                <td>{{$publications->file}}</td>
                <td>
                    <ul class="list-inline m-0">
                   <li class="list-inline-item">
                       <a href="/a_publications/{{$publications->id}}/edit"><span class="badge badge-pill badge-success">Update</span></a>
                   </li>
                   <li class="list-inline-item">

                    {!!Form::open(['action' => ['PublicationsController@destroy', $publications->id], 'method'=> 'POST','role'=>'form','onsubmit' => 'return confirm("are you sure ?")'])!!}

                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=> 'bad badg.e-primary'])}}

                    {!!Form::close()!!}
                  {{-- <a href=""><span class="badge badge-pill badge-danger">Delete</span></a> --}}
                   </li>
               </ul></td>
            </tr>
              @endforeach
            @else
            <tr class="gradeX">
                <td></td>
                <td>No Data for now</td>
                <td></td>
              
                <td></td>
            </tr>
            @endif
           
            </tbody>
            
            </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>
@endsection