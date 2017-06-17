@extends('layout')

@section('content')
<div class="page-header">
        <h1>Kalendar zakazanih pacijenata {{ $doctors[request()->route()->parameters['id']-1]->name}}</h1>
    </div>
    {!! $drcalendar->calendar() !!}
@stop

@section('scripts')
    {!! $drcalendar->script() !!}
@stop