{{-- resources/views/admin/addadmin.blade.php --}}

  {{--Created by PhpStorm.--}}
  {{--User: user--}}
  {{--Date: 2016-03-07--}}
  {{--Time: 7:36 AM--}}

@extends('layouts.mainapp')

@section('content')
    <script type="text/javascript" src="{{ asset('sbadmin/js/manageadmin_js_own.js') }}"></script>
    {{-- Admin Table [START]--}}
    <div class="panel panel-primary" style="margin-top: 20px">
        <div class="panel-heading"><strong>Admins</strong></div>
        <div class="panel-body">
            <table id="adminTable" class="table table-hover table-striped table-responsive">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Page</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td><input type="hidden" class="admin_id" value="{{ $admin->id }}" /> {{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->password }}</td>
                            @if($admin->page == 'l')
                                <td>Landing Page</td>
                            @elseif($admin->page == 's')
                                <td>Subhaus</td>
                            @elseif($admin->page == 'm')
                                <td>Monroe</td>
                            @elseif($admin->page == 'f')
                                <td>Flux</td>
                            @elseif($admin->page == 'p')
                                <td>Pitstop</td>
                            @endif
                            <td>{{ $admin->created_at }}</td>
                            <td>{{ $admin->updated_at }}</td>
                            <td>
                                <button type="submit" class="btn btn-primary btnEdit"><i class="fa fa-btn fa-pencil"></i>Edit</button>
                                |
                                <button type="submit" class="btn btn-danger btnDelete"><i class="fa fa-btn fa-trash"></i>Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Admin Table [END] --}}


    {{-- Add Admin Form [START] --}}
    <div class="panel panel-primary" style="margin-top: 20px">
        <div class="panel-heading"><strong>Add/Edit Admin</strong></div>
        <div class="panel-body">
            {!! Form::open(array('id'=>'addAdminForm', 'url'=>'/doaddadmin', 'data-toggle'=>'validator', 'role'=>'form', 'class'=>'form-horizontal', 'method'=>'post')) !!}
                <div class="form-group" id="grpAdminName">
                    <div class="col-md-3 col-lg-3">
                        {!! Form::label('adminName', 'Name', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        {!! Form::text('txtAdminName', null, array('id'=>'txtAdminName', 'class'=>'form-control')) !!}
                        {{--<input type="text" id="txtAdminName" class="form-control" />--}}
                    </div>
                </div>
                <div class="form-group" id="grpAdminEmail">
                    <div class="col-md-3 col-lg-3">
                        {!! Form::label('adminEmail', 'Email', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        {!! Form::text('txtAdminEmail', null, array('id'=>'txtAdminEmail', 'class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group" id="grpAdminPass">
                    <div class="col-md-3 col-lg-3">
                        {!! Form::label('adminPass', 'Password', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        {!! Form::password('txtAdminPassword', array('id'=>'txtAdminPassword', 'class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group" id="grpAdminPage">
                    <div class="col-md-3 col-lg-3">
                        {!! Form::label('adminPage', 'Page', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <?php
                            $pages = array('l' => 'Landing Page', 's' => 'Subhaus', 'm' => 'Monroe', 'p' => 'Pitstop', 'f' => 'Flux');
                        ?>
                        {!! Form::select('page', $pages, 'l', array('class' => 'form-control', 'id' => 'txtPage') ) !!}
                    </div>
                </div>

                <hr/>

                <div class="col-md-12 col-lg-12 text-right">
                    <input type="hidden" id="txtAdminID_hidden"/>
                    <input value="Add Admin" type="submit" id="btnAddAdmin" name="btnAddAdmin" class="btn btn-success" />
                    <input value="Update Admin" type="submit" id="btnUpdateAdmin" name="btnUpdateAdmin" class="btn btn-primary" />
                    <input value="Cancel" type="submit" id="btnCancel" name="btnCancel" class="btn btn-warning" />
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    {{-- Add Admin Form [END] --}}
@endsection
