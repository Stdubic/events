@extends('layout')

@section('content')
    <div class="page-header">
        <h1>login </h1>
    </div>
    <div class="row">
            <div class="col-md-8">

                <form action="/login" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" name="email" class="form-control" value=""/>
                    </div>

                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" name="password" class="form-control" value=""/>
                    </div>


                <button class="btn btn-primary" type="submit" >Login</button>
                </form>
            </div>
        </div>


@stop

@section('scripts')

@stop