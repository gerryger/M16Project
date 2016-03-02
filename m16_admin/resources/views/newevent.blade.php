{{-- resources/views/newtask.blade.php --}}

@extends('layouts.mainapp')

@section('content')
    <!-- Events table [START] -->
    <div class="panel panel-default" style="margin-top: 20px">
        <div class="panel-heading"><strong>Current Events</strong></div>
        <div class="panel-body">
            <table id="eventsTable" class="table table-hover table-striped" width="100%">
                <thead>
                    <th>Event Name</th>
                    <th>Page</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->ev_name }}</td>
                            @if($event->ev_page == 'l')
                                <td>Landing Page</td>
                            @elseif($event->ev_page == 's')
                                <td>Subhaus</td>
                            @elseif($event->ev_page == 'm')
                                <td>Monroe</td>
                            @elseif($event->ev_page == 'p')
                                <td>Pitstop</td>
                            @elseif($event->ev_page == 'f')
                                <td>Flux</td>
                            @else
                                <td>{{ $event->ev_page }}</td>
                            @endif
                            <td>{{ $event->ev_start }}</td>
                            <td>{{ $event->ev_end }}</td>
                            <td>{{ $event->ev_desc  }}</td>
                            <td>
                                <form action="{{ url('/deleteevent/'.$event->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" id="delete-event-{{ $event->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Events table [END] -->

    <div class="panel panel-default" style="margin-top: 20px">
        <div class="panel-heading"><strong>Add New Events</strong></div>
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')

            <!-- New Event Form -->
            {!! Form::open(array('url'=>'/doinsertevent', 'method'=>'post', 'class'=>'form-horizontal')) !!}

                {{-- Page --}}
                <div class="form-group">
                    <div class="col-md-3 col-lg-3">
                        {!! Form::label('page', 'Page', array('class'=>'control-label')) !!}
                    </div>
                    <?php
                        $pages = array('l' => 'Landing Page', 's' => 'Subhaus', 'm' => 'Monroe', 'p' => 'Pitstop', 'f' => 'Flux');
                    ?>
                    <div class="col-md-3 col-lg-3">
                        {!! Form::select('page', $pages, 'l', array('class' => 'form-control') ) !!}
                    </div>
                </div>

                {{-- Event Name --}}
                <div class="form-group">
                    <div class="col-md-3 col-lg-3 ">
                        {!! Form::label('eventname', 'Event Name', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        {!! Form::text('txtEventName', null, array('class' => 'form-control')) !!}
                    </div>
                </div>

                {{-- Start Date --}}
                <div class="form-group">
                    <div class="col-md-3 col-lg-3 ">
                        {!! Form::label('startdate', 'Start', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="input-group date" id="datetimepicker1">
                            {!! Form::text('txtStartDate', null, array('class' => 'form-control', 'id'=>'txtStartDate')) !!}
                            <span class="input-group-addon">
                                <span id="startDateIcon" class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        {{--<div id="datetimepicker1" class="input-append date">--}}
                            {{--<input data-format="dd/MM/yyyy hh:mm:ss" type="text" />--}}
                            {{--<span class="add-on">--}}
                              {{--<i data-time-icon="icon-time" data-date-icon="icon-calendar">--}}
                              {{--</i>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    </div>
                </div>

                {{-- End Date --}}
                <div class="form-group">
                    <div class="col-md-3 col-lg-3 ">
                        {!! Form::label('enddate', 'End', array('class'=>'control-label')) !!}
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="input-group date" id="datetimepicker1">
                            {!! Form::text('txtEndDate', null, array('class' => 'form-control', 'id'=>'txtEndDate')) !!}
                            <span class="input-group-addon">
                                    <span id="endDateIcon" class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                </div>

                {{-- Description --}}
                <div class="form-group">
                    <div class="col-md-3 col-lg-3 ">
                        {!! Form::label('description', 'Description', array('class' => 'control-label')) !!}

                    </div>
                    <div class="col-md-3 col-lg-3 ">
                        {!! Form::textarea('txtDescription',null, array('class' => 'form-control', 'style' => 'height: 80px')) !!}
                    </div>
                </div>

                <hr/>

                <div class="col-md-12 col-lg-12 text-right">
                    <input value="Add Event" type="submit" id="btnAddEvent" name="btnAddEvent" class="btn btn-success" />
                </div>

            <script type="text/javascript">
//                $(document).ready(function(){
//                    $('#eventsTable').dataTable();
//                    $('#datetimepicker1').datetimepicker({
//                        language: 'pt-BR'
//                    });
//                });
            </script>
            {!! Form::close() !!}
        </div>
    </div>
@endsection