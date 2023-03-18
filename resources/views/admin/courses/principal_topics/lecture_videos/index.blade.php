@extends('admin.layouts.master')

@section('title')
apoGuru - Lecture Videos for {{$principal_topic->name}} - {{$course->title}}
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Lecture Videos for {{$principal_topic->name}} - {{$course->title}}</h2>
        </div>

        <!-- Vertical Layout -->

        <!-- #END# Vertical Layout -->
        <!-- Vertical Layout | With Floating Label -->

        <!-- Vertical Layout | With Floating Label -->
        <!-- Horizontal Layout -->

        <!-- #END# Horizontal Layout -->
        <!-- Inline Layout -->

        <!-- #END# Inline Layout -->
        <!-- Inline Layout | With Floating Label -->
        <div class="row clearfix">
          @if (Session::has('msg'))
              <div class="alert alert-success">
                  {{Session::get('msg')}}
              </div>
          @endif
          @if (Session::has('error'))
              <div class="alert alert-success">
                  {{Session::get('error')}}
              </div>
          @endif
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="header">
                      <h2>
                          Course : {!! $course->title !!}
                      </h2>
                  </div>
                  <div class="body">
                      <ul class="list-group">
                          <li class="list-group-item"><img src="{{url('course_images')}}/{{$course->image}}" width="100" height="100"/></li>
                          <li class="list-group-item">Course Name : {!! $course->title !!}</li>
                          <li class="list-group-item">Course Name : {!! $course->description !!}</li>
                          <li class="list-group-item">Actual Price : GHS {{ $course->actual_price }}</li>
                          <li class="list-group-item">Sell Price : GHS {{ $course->sell_price }}</li>
                          <li class="list-group-item">Main Category : {{$course->mainCategory->name}}</li>
                          <li class="list-group-item">Parent Sub Category : {{$course->parentSubCategory->name}}</li>
                          <li class="list-group-item">Child Sub Category : {{$course->childSubCategory->name}}</li>
                      </ul>
                  </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="header">
                      <h2>
                          Principal Topic : {{ $principal_topic->name }}
                      </h2>
                  </div>
                  <div class="body">
                      <ul class="list-group">
                          <li class="list-group-item">Topic Name : {{$principal_topic->name}}</li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="body">
                    <form method="post" action="{{ route('admin.course.principal.topic.lecture.video.store') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="principal_topic_id" value="{{$principal_topic->id}}"/>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Add New Lecture Video
                                        </h2>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <input type="text" name="name" class="form-control" required>
                                              <label class="form-label">Lecture Video Name</label>
                                          </div>
                                      </div>
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <input type="file" name="video" class="form-control" required>
                                              <label class="form-label">Lecture Video File</label>
                                          </div>
                                      </div>
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <input type="file" name="thumbnail" class="form-control">
                                              <label class="form-label">Select Thumbnail (optional)</label>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Add Lecture Video"/>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Lecture Videos for {{$principal_topic->name}} - {{$course->title}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Video title</th>
                                        <th>Video Thumbnail</th>
                                        <th>Video</th>
                                        @if(Auth::user()->role_as == 0)
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <th>Edit</th>
                                        
                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        
                                        @endif
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Video title</th>
                                        <th>Video Thumbnail</th>
                                        <th>Video</th>
                                        @if(Auth::user()->role_as == 0)
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <th>Edit</th>
                                        
                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        
                                        @endif
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @php($count=0)
                                  @foreach ($lecture_videos as $video)
                                  @php($count++)
                                    <tr>
                                       <td>{{$count}}</td>
                                        <td>{!!$video->name!!}</td>

                                        <td> <img src="{{url('lecture_video_thumbnails')}}/{{$video->thumbnail}}" width="100" height="100"/> </td>
                                        <td>
                                          <video width="320" height="240" controls>
                                            <source src="{{url('lecture_videos')}}/{{$video->video}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                          </video>
                                        </td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.course.principal.topic.lecture.video.edit', $video->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.course.principal.topic.lecture.video.delete', $video->id)}}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.course.principal.topic.lecture.video.edit', $video->id)}}"><i class="material-icons">edit</i></a> </td>

                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        
                                        @endif
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Inline Layout | With Floating Label -->
        <!-- Multi Column -->
        <!-- #END# Multi Column -->
    </div>
</section>
@endsection

@section('scripts')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<!-- Ckeditor -->
<script src="{{ URL::asset('admin_theme/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
//CKEditor
CKEDITOR.replace( 'answer' );
CKEDITOR.add
</script>
@endsection
