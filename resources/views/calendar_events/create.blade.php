@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">Pacijent</label>
                     <input type="text" name="title" class="form-control" value="" required/>
                </div>
                <div class="form-group">
                                     <label for="dr">Lekar</label>
                                     <select name="dr" class="form-control">
                                       <option value='1'>Dr.Spira</option>
                                       <option value='2'>Dr.Goshko</option>
                                       <option value='3'>Dr.Dragisha</option>
                                     </select>
                 </div>
                    <div class="form-group">
                     <label for="start">Pocetak Pregleda</label>
                     <input type="text" name="start" id="time" class="form-control" value="" required/>
                </div>
                    <div class="form-group">
                     <label for="end">Kraj Pregleda</label>
                     <input type="text" name="end" id="time1" class="form-control" value="" required/>
                </div>
                     <div class="form-group">
                     <label for="background_color">Ordinacija</label>
                     <select name="background_color" class="form-control">
                       <option value='Blue'>Ordinacija Blue</option>
                       <option value='Red'>Ordinacija Red</option>
                       <option value='Green'>Ordinacija Green</option>
                     </select>
                </div>

            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
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