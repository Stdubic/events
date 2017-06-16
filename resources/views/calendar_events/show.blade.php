@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">Lekar</label>
                    <p class="form-control-static">{{$calendar_event->doctor->name}}</p>
                </div>
                <div class="form-group">
                     <label for="title">Pacijent</label>
                     <p class="form-control-static">{{$calendar_event->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="start">Pocetak Pregleda</label>
                     <p class="form-control-static">{{$calendar_event->start}}</p>
                </div>
                    <div class="form-group">
                     <label for="end">Kraj Pregleda</label>
                     <p class="form-control-static">{{$calendar_event->end}}</p>
                </div>

                    <div class="form-group">
                     <label for="background_color">Ordinacija</label>
                     <p class="form-control-static">{{$calendar_event->background_color}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('calendar_events.edit', $calendar_event->id) }}">Edit</a>
            <form action="#/$calendar_event->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection