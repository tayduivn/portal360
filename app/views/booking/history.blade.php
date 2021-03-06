@extends('layouts.master')

@section('title', trans('enrollment_index.page_title'))

@section('styles')
<style>
  @media 
  only screen and (max-width: 760px),
  (min-device-width: 768px) and (max-device-width: 1024px)  {
    td:nth-of-type(1):before { content: '{{trans('booking_index.type')}} : '; } 
    td:nth-of-type(2):before { content: '{{trans('booking_index.schedule')}} : '; } 
    td:nth-of-type(3):before { content: '{{trans('booking_index.topic')}} : '; }
    td:nth-of-type(4):before { content: '{{trans('booking_index.teacher')}} : '; }
    td:nth-of-type(5):before { content: '{{trans('booking_index.date')}} : '; }
    td:nth-of-type(6):before { content: '{{trans('booking_index.room')}} : '; }
    td:nth-of-type(7):before { content: '{{trans('booking_index.center')}} : '; }
    td:nth-of-type(8):before { content: ' '; }
  }
  </style>

@stop

@section('content')
<!-- page start-->
<div class="row">
<div class="col-lg-12">
    <section class="panel panel-default">  
    <header class="panel-heading text-uppercase" style="border-radius:0">
        <b>{{ trans('booking_index.page_title_history') }}</b>
    </header>

    <div class="panel-body">
    @if (empty($session_booking) OR count($session_booking) <=0 OR $session_booking == '[]')
                  <h4><p class="text-center">{{ trans('booking_index.could_not_find') }}</p></h4>
                @else
    <div class="card">
    <div class="card-body card-padding overflow-auto">
        <table id="data-table" class="datatable table table-bordered table-hover table-striped table-vmiddle">
            <thead>
                <tr>
                    <th>{{trans('booking_index.type')}}</th>
                    <th>{{trans('booking_index.schedule')}}</th>
                    <th>{{trans('booking_index.topic')}}</th>
                    <th>{{trans('booking_index.teacher')}}</th>
                    <th>{{trans('booking_index.date')}}</th>
                    <th>{{trans('booking_index.room')}}</th>
                    <th>{{trans('booking_index.center')}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                 @foreach($session_booking as $key => $booking)
                    <tr>
                        <td>{{ $booking['type'] }}</td>
                        <td>{{ $booking['schedule_time'] }}</td>
                        <td>{{ $booking['topic_name'] }} </td>
                        <td>{{ $booking['teacher_name'] }}</td>
                        <td>{{ $booking['day_name'] }}<br>{{SugarUtil::formatDate( $booking['schedule_date']) }}</td>
                        <td>{{ $booking['room_name'] }}</td>
                        <td>{{ $booking['center_name'] }}</td>       
                        <!-- <td><a class="btn btn-default btn-xs" href="{{ route('Booking.cancel',[  $booking['session_id']  ]) }}" role="button" target="_blank">{{trans('booking_index.cancel')}}</a></td> -->
                        <td><a class="btn btn-default btn-xs" onclick="return confirmdelete('{{ $booking["session_id"] }}');" role="button" target="_blank">{{trans('booking_index.cancel')}}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
    </div>
    @endif 
    </div>
    </section>
</div> 
</div>

  <!-- page end-->
@stop

@section('scripts')

    <script src="{{ URL::asset('public/theme/assets/jquery-knob/js/jquery.knob.js') }}"></script>
    <script type="text/javascript">
        function confirmdelete($id)
        {
            var note= confirm(" {{ trans('error.confirmdele') }} ");
            if (note) 
            {
                window.location.href = "{{ URL::to('booking/cancel') }}/"+$id;
             
            }   
        }
    </script>
@stop