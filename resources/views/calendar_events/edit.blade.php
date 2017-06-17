@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Uredi zakazivanje pacijenta : {{$calendar_event->title}} </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.update', $calendar_event->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <div class="form-group">
                    <label for="dr">Lekar</label>
                    <select name="dr" class="form-control">
                        @foreach($doctors as $doctor)
                            <option @if($calendar_event->doctor->name == $doctor->name) selected='selected' @endif value='{{$doctor->id}}'>{{$doctor->name}}</option>
                        @endforeach
                    </select>
                 </div>
                <div class="form-group">
                     <label for="title">Pacijent</label>
                     <input type="text" name="title" class="form-control" value="{{$calendar_event->title}}"/>
                </div>
                <div class="form-group">
                                     <label for="title">Telefon</label>
                                     <input type="number" name="title" class="form-control" value="{{$calendar_event->phone}}"/>
                                </div>
                    <div class="form-group">
                     <label for="start">Pocetak Pregleda</label>
                     <input type="text" name="start" id="time" class="form-control" value="{{$calendar_event->start}}"/>
                </div>
                    <div class="form-group">
                     <label for="end">Kraj Pregleda</label>
                     <input type="text" name="end" id="time1" class="form-control" value="{{$calendar_event->end}}"/>
                </div>

                    <div class="form-group">
                                        <label for="background_color">Ordinacija</label>
                                        <select name="background_color" class="form-control">
                                          <option value='Blue' @if($calendar_event->background_color == 'Blue') selected='selected' @endif>Ordinacija Blue</option>
                                          <option value='Red'@if($calendar_event->background_color == 'Red') selected='selected' @endif>Ordinacija Red</option>
                                          <option value='Green'@if($calendar_event->background_color == 'Green') selected='selected' @endif>Ordinacija Green</option>
                                        </select>
                                   </div>



            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Nazad</a>
            <button class="btn btn-primary" type="submit" >Zapamti</button>
            </form>
        </div>
    </div>


<script>
    $('#time').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        sideBySide: true,
        stepping: 10
    });
    $('#time1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        sideBySide: true,
        stepping: 10
    });
</script>
@endsection