@extends('layout')

@section('content')
<div class="page-header  col-md-offset-5">
        <h1>Kalendar <b>  {{ $doctors[request()->route()->parameters['id']-1]->name}}</b> </h1>
    </div>
    {!! $drcalendar->calendar() !!}
@stop

@section('scripts')
    {!! $drcalendar->script() !!}
@stop