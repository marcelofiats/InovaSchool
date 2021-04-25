@extends('layouts.admin.app')

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

<link href="{{ asset('/lib/main.css') }}" rel='stylesheet' />


<style>

  #script-warning {
    display: none;
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    color: red;
  }

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>

<div class="card-body">
    @include('calendario._form')
    <div id="wrap">
        <div class="row">

            <div class="col-md-12">
            <div id='script-warning'>
                <code>ics/feed.ics</code> must be servable
                </div>

                <div id='loading'>loading...</div>

                <div id='calendar' data-load-events="{{ route('loadEvents') }}"></div>
            </div>
        </div>
    </div>

</div>




@endsection

@section('script')
<script src='https://github.com/mozilla-comm/ical.js/releases/download/v1.4.0/ical.js'></script>
<script src="{{ asset('/lib/main.js') }}"></script>
<script src="{{ asset('/lib/locales-all.js') }}"></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
        var data = new Date();
      var calendar = new FullCalendar.Calendar(calendarEl, {
        displayEventTime: false,
        initialDate: data,
        locale: 'pt-br',
        selectable: true,
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,listYear'
        },
        select: function(element){
            $('#show').modal('show');
        },
        events: loadEvent('loadEvents'),
        loading: function(bool) {
          document.getElementById('loading').style.display =
            bool ? 'block' : 'none';
        }
      });

      calendar.render();
    });

    function loadEvent(route) {
        return document.getElementById('calendar').dataset[route];
    }

    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
  </script>

@endsection
