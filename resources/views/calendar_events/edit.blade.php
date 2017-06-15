@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Edit </h1>
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
                            <option value='{{$doctor->id}}'>{{$doctor->name}}</option>
                        @endforeach
                    </select>
                 </div>
                <div class="form-group">
                     <label for="title">Pacijent</label>
                     <input type="text" name="title" class="form-control" value="{{$calendar_event->title}}"/>
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
                     <input type="text" name="background_color" class="form-control" value="{{$calendar_event->background_color}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</button>
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