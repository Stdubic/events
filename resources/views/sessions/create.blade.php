@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Register </h1>
    </div>
    <div class="row">
            <div class="col-md-12">

                <form action="/register" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" name="name" class="form-control" value=""/>
                    </div>

                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" name="email" class="form-control" value=""/>
                    </div>

                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" name="password" class="form-control" value=""/>
                    </div>

                    <div class="form-group">
                         <label for="password">Password Confirmation</label>
                         <input type="password" name="password_confirmation" class="form-control" value=""/>
                    </div>





                <button class="btn btn-primary" type="submit" >Create</button>
                </form>
            </div>
        </div>


@stop

@section('scripts')

@stop