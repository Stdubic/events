@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Consilium Dr. Spira Patient Appointments</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>Lekar</th>
                        <th>Pacijent</th>
                        <th>Pocetak Pregleda</th>
                        <th>Kraj Pregleda</th>
                        <th>Ordinacija</th>
                        <th>Zakazao</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($calendar_events as $calendar_event)

                <tr>

                    <td>{{$calendar_event->doctor->name}}</td>
                    <td>{{$calendar_event->title}}</td>
                    <td>{{$calendar_event->start}}</td>
                    <td>{{$calendar_event->end}}</td>
                    <td>{{$calendar_event->background_color}}</td>
                    <td>{{$calendar_event->user->name}}</td>


                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('calendar_events.show', $calendar_event->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('calendar_events.edit', $calendar_event->id) }}">Edit</a>
                        <form action="{{ route('calendar_events.destroy', $calendar_event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('calendar_events.create') }}">Create</a>
        </div>
    </div>


@endsection