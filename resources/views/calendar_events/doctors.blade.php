@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Lista zakazanih pacijenata {{ $doctors[request()->route()->parameters['id']-1]->name}}</h1>
    </div>



{{--{{dd(request()->route()->parameters['id'])}}--}}

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>Lekar</th>
                        <th>Pacijent</th>
                        <th>Telefon</th>
                        <th>Pocetak Pregleda</th>
                        <th>Kraj Pregleda</th>
                        <th>Ordinacija</th>
                        <th>Zakazao</th>
                        <th class="text-right">Opcije</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($calendar_events as $calendar_event)

                <tr>

                    <td>{{$calendar_event->doctor->name}}</td>
                    <td>{{$calendar_event->title}}</td>
                    <td>{{$calendar_event->phone}}</td>
                    <td>{{$calendar_event->start}}</td>
                    <td>{{$calendar_event->end}}</td>
                    <td>{{$calendar_event->background_color}}</td>
                    <td>{{$calendar_event->user->name}}</td>


                    <td class="text-right">
                        {{--<a class="btn btn-primary" href="{{ route('calendar_events.show', $calendar_event->id) }}">View</a>--}}
                        <a class="btn btn-warning " href="{{ route('calendar_events.edit', $calendar_event->id) }}">Uredi</a>
                        <form action="{{ route('calendar_events.destroy', $calendar_event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Obriši? Da li si siguran?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Obriši</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>
            {{$calendar_events->links()}}

            <a class="btn btn-success" href="{{ route('calendar_events.create') }}">Zakaži</a>
        </div>
    </div>


@endsection