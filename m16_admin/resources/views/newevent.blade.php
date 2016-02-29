{{-- resources/views/newtask.blade.php --}}

@extends('layouts.mainapp')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Add New Events</div>
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')

            <!-- New Event Form -->
            {!! Form::open(array('url'=>'/doinsertevent', 'method'=>'post', 'class'=>'form-horizontal')) !!}
                <div class="form-group">
                    {!! Form::label('page', 'Page', array('class'=>'control-label')) !!}
                    {!! Form::select('page', array('') ) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection