@extends('admin.layouts.master')

@section('title')
apoGuru - Users
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Users</h2>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Users  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(xxxx) Users Online
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                   <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Last login Date & Time</th>
                                        <th>sign up Date & Time</th>
                                        <th colspan="2">Active Subscriptions</th>
                                        <th colspan="2">Expired Subscriptions</th>
                                        <th>Cumulative number of Subscriptions</th>
                                        <th colspan="4">Courses Created</th>
                                        <th>Notes</th>
                                        <th>Document</th>
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
                                   <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>course</td>
                                        <td>Duration</td>
                                        <td>course</td>
                                        <td>Duration</td>
                                        <td></td>
                                        <td>Course Name</td>
                                        <td>Main Category</td>
                                        <td>Parent Sub Category</td>
                                        <td>child Sub Category</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                   </tr>   
                                </thead>
                                <tfoot>
                                    
                                </tfoot>
                                <tbody>
                                    @php($count=0)
                                    @foreach ($users as $user)
                                    @php($count++)
                                    
                                        <tr>
                                            <td>{{$count}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>Soon</td>
                                            <td>Soon</td>
                                            <td>{{$count}}</td>
                                            <td>{{$count}}</td>
                                            <td>{{$count}}</td>
                                            <td>{{$count}}</td>
                                            <td>{{$count}}</td>

                                            @if($user->course)
                                            <td>{{$user->course->title}}</td>
                                            @else
                                            <td>course</td>
                                            @endif
                                            
                                            @if($user->mainCategory)
                                                <td>{{$user->mainCategory->name}}</td>
                                            @else
                                                <td>name</td>
                                            @endif
                                            
                                            <td>{{$user->p_name}}</td>
                                            <td>{{$user->c_name}}</td>
                                            <td>{{$user->notetitle}}</td>
                                            <td><a href="{{route('admin.document.list', $user->id)}}"><i class="material-icons">question_answer</i></a> </td>
                                            @if(Auth::user()->role_as == 0)
                                            <td> <a href="{{route('admin.user.edit', $user->id)}}"><i class="material-icons">edit</i></a> </td>
                                            <td> <a href="{{route('admin.user.delete', $user->id)}}"><i class="material-icons">delete</i></a> </td>
                                            @endif
                                            @if(Auth::user()->role_as == 1)
                                            <td> <a href="{{route('admin.user.edit', $user->id)}}"><i class="material-icons">edit</i></a> </td>
                                        
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

@endsection
